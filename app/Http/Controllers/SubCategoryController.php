<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SubCategoryController extends Controller
{
    public function index()
    {
        $title = trans('Categories');
        $categories = SubCategory::orderBy('updated_at', 'desc')->get();

        return view('pages.sub_categories.category', compact('title','categories'));
    }

    public function getSubCategory()
    {
//        $data = Data::all();
        $subcategories = SubCategory::with(['category'])->orderBy('updated_at', 'desc')->get();

        $subcategories = DB::table('sub_categories as sc')
            ->join('categories as ct', 'sc.category_id', '=', 'ct.id')
            ->select('sc.*', 'ct.name as ct_name')->orderBy('sc.updated_at', 'desc')
            ->get();

        return $subcategories->toJson();
//        return response()->json([
//            'subcategories' => $subcategories,
//        ]);
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

            $upload_dir = public_path('uploads/subcategoryimages/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/subcategoryimages/thumb/');
            if ( ! file_exists($thumb_dir)){
                mkdir($thumb_dir, 0777, true);
            }

            $fileName = "$slug".'.'.$request->image->getClientOriginalExtension();
            $full_image = Image::make($image)->resize(1500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $resized = Image::make($image)->resize(200, null, function ($constraint) {
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
            'category_id'      => $request->category,
        ];

        $create = SubCategory::create($data);

        return $data;
    }

    public function destroy(Request $request)
    {
        $con = SubCategory::where('id','=',$request->id)->first();

        $upload_dir = public_path('uploads/subcategoryimages/');
        $thumb_dir = public_path('uploads/subcategoryimages/thumb/');

        File::delete($upload_dir.$con->image);
        File::delete($thumb_dir.$con->image);
        $delete = SubCategory::find($request->id)->delete();

        if ($delete){
            if ($request->ajax()){ //checking if input is ajax
                return response()->json(['success' => 'SubCategory deleted successfully.']);
            }
            return back()->with('success', trans('Category deleted successfully.'));
        }
        if ($request->ajax()){ //checking if input is ajax
            return response()->json(['error' => 'something_went_wrong.']);
        }
        return response()->json(['success' => 'Product successfully deleted']);

    }
}
