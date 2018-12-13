<?php

namespace App\Http\Controllers;

use App\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Products Variant');
        $prod_var = ProductVariant::orderBy('updated_at', 'desc')->get();

        return view('pages.product_variant.product_variant', compact('title','prod_var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = trans('Products Variant Create');
        return view('pages.product_variant.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:product_variants',
        ]);
        $slug = str_slug($request->name,'_');

        try {
            $create = ProductVariant::create([
                'name'             => $request->name,
                'slug'             => $slug,
            ]);
            if ($create){
                return redirect('product_variant')->with('success', trans('Product variant '.$request->name.' created successfully.'));
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
        $prod_var = ProductVariant::where('slug',$id)->first();
//        dd($prod_var);

        return view('pages.product_variant.edit', compact('title','prod_var'));
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
        $prod_var = ProductVariant::where('id',$id)->first();
//        dd($request);
        $this->validate($request, [
            'name'    => 'required|unique:categories,name,'.$prod_var->id,
            'description' => 'string',
        ]);
        $slug = str_slug($request->name,'_');

        ProductVariant::whereId($id)->update([
            'name'              => $request->name,
            'slug'              => $slug,
        ]);
        return redirect('product_variant')->with('success', trans('Product variant '.$request->name.' updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductVariant::where('id', $id)->delete();

        if ($delete){
            return response()->json(['success' => trans('Variant deleted successfully.')]);
        }
        return response()->json(['error' => trans('something_went_wrong')]);
    }
}
