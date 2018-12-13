<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Products');
        $products = Products::with(['category'])->orderBy('updated_at', 'desc')->get();
//        dd($products);

        return view('pages.products.product', compact('title','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = trans('Products Create');
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('pages.products.add', compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:products',
            'description' => 'string',
        ]);

        $slug = str_slug($request->name,'_');
        $fileName = null;
        $image = $request->file('image');

        if ($request->hasFile('image')){

            $upload_dir = public_path('uploads/productimages/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/productimages/thumb/');
            if ( ! file_exists($thumb_dir)){
                mkdir($thumb_dir, 0777, true);
            }

            $fileName = "$slug".'.'.$request->image->getClientOriginalExtension();
            $full_image = Image::make($image)->resize(1500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $resized = Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $thumbFileName = $thumb_dir.$fileName;
            $imageFileName = $upload_dir.$fileName;

            try{//Uploading image
                //Uploading original image
                $full_image->save($imageFileName);
                //Uploading thumb
                $resized->save($thumbFileName);
            } catch (\Exception $e){
                return $e->getMessage();
            }
        }

        $data = [
            'name'             => $request->name,
            'image'            => $fileName,
            'description'      => $request->description,
            'slug'             => $slug,
            'category_id'      => $request->category,
        ];

        try {
            $create = Products::create($data);
            if ($create){
                return redirect('product')->with('success', trans('Category '.$request->name.' created successfully.'));
            }
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return back()->with('error', trans('Duplicate entry'))->withInput($request->input());
            }
        }
        return back()->with('error', trans('something_went_wrong'))->withInput($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = trans('Products Edit');
        $categories = Category::orderBy('updated_at', 'desc')->get();
        $product = Products::with(['category'])->where('slug',$id)->first();
//        dd($category);

        return view('pages.products.edit', compact('title','product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::where('id',$id)->first();
//        dd($request);
        $this->validate($request, [
            'name'    => 'required|unique:products,name,'.$product->id,
            'description' => 'string',
        ]);

        $slug = str_slug($request->name,'_');
        $fileName = null;
        $image = $request->file('image');

        if ($request->hasFile('image')){
            $upload_dir = public_path('uploads/productimages/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/productimages/thumb/');
            if ( ! file_exists($thumb_dir)){
                mkdir($thumb_dir, 0777, true);
            }

            $fileName = "$slug".'.'.$request->image->getClientOriginalExtension();
            $full_image = Image::make($image)->resize(1500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $resized = Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $thumbFileName = $thumb_dir.$fileName;
            $imageFileName = $upload_dir.$fileName;

            File::delete($thumbFileName);
            File::delete($imageFileName);

            try{//Uploading image
                //Uploading original image
                $full_image->save($imageFileName);
                //Uploading thumb
                $resized->save($thumbFileName);
            } catch (\Exception $e){
                return $e->getMessage();
            }

            Products::whereId($id)->update([
                'image'             => $fileName,
                'name'              => $request->name,
                'description'      => $request->description,
                'slug'              => $slug,
                'category_id'      => $request->category,
            ]);
            return redirect('product')->with('success', trans('Product '.$request->name.' updated successfully.'));

        }else{
            $data = [
                'name'              => $request->name,
                'description'       => $request->description,
                'slug'              => $slug,
                'category_id'      => $request->category,
            ];
            $update = Products::whereId($id)->update($data);
            return redirect('product')->with('success', trans('Product '.$request->name.' updated successfully.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
