<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Categories');
        $categories = Category::orderBy('updated_at', 'desc')->get();

        return view('pages.categories.category', compact('title','categories'));
    }

    public function getCategory()
    {
//        $data = Data::all();
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = trans('Category Create');
        return view('pages.categories.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeItem(Request $request)
    {
        $slug = str_slug($request->name,'_');
        $fileName = null;
        $image = $request->file('image');

        $data = [
            'name'             => $request->name,
            'age'             => $request->age,
            'profession'             => $request->profession,
        ];
        $create = Category::create($data);
        return $data;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'string',
        ]);

        $slug = str_slug($request->name,'_');
        $fileName = null;
        $image = $request->file('image');

        if ($request->hasFile('image')){

            $upload_dir = public_path('uploads/categoryimages/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/categoryimages/thumb/');
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
            'description'      => $request->description,
            'slug'             => $slug,
            'image'            => $fileName,
        ];

        try {
            $create = Category::create($data);
            if ($create){
                return redirect('category')->with('success', trans('Category '.$request->name.' created successfully.'));
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
        $title = trans('Category Edit');
        $category = Category::where('slug',$id)->first();
//        dd($category);

        return view('pages.categories.edit', compact('title','category'));
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
        $category = Category::where('id',$id)->first();
//        dd($request);
        $this->validate($request, [
            'name'    => 'required|unique:categories,name,'.$category->id,
            'description' => 'string',
        ]);

        $slug = str_slug($request->name,'_');
        $fileName = null;
        $image = $request->file('image');

        if ($request->hasFile('image')){
            $upload_dir = public_path('uploads/categoryimages/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/categoryimages/thumb/');
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

            Category::whereId($id)->update([
                'image'             => $fileName,
                'name'              => $request->name,
                'description'      => $request->description,
                'slug'              => $slug,
            ]);
            return redirect('category')->with('success', trans('Category '.$request->name.' updated successfully.'));

        }else{
            $data = [
                'name'              => $request->name,
                'description'       => $request->description,
                'slug'              => $slug,
            ];
            $update = Category::whereId($id)->update($data);
            return redirect('category')->with('success', trans('Category '.$request->name.' updated successfully.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $con = Category::where('id','=',$request->id)->first();

        $upload_dir = public_path('uploads/categoryimages/');
        $thumb_dir = public_path('uploads/categoryimages/thumb/');

        File::delete($upload_dir.$con->image);
        File::delete($thumb_dir.$con->image);
        $delete = Category::find($request->id)->delete();

        if ($delete){
            if ($request->ajax()){ //checking if input is ajax
                return response()->json(['success' => 'Category deleted successfully.']);
            }
            return back()->with('success', trans('Category deleted successfully.'));
        }
        if ($request->ajax()){ //checking if input is ajax
            return response()->json(['error' => 'something_went_wrong.']);
        }
        return response()->json(['success' => 'Product successfully deleted']);

    }
}
