<?php

namespace App\Http\Controllers;

use App\CartHold;
use App\Category;
use App\Products;
use App\SubCategory;
use App\Table;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
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
//        $cat = Category::orderBy('name')->select('name','id')->get();
//        $subcat = SubCategory::with(['category'])->orderBy('name')->get();
        $prod = Products::with(['category','subcategory'])->orderBy('name')->get();
//dd($subcat);

        $cat = Category::orderBy('name','asc')->select('name','id')->get();
        $cat = Category::with(['subcategory'])->orderBy('name','asc')->select('name','id')
            ->whereHas('subcategory', function ($query) {
                $query->where('id', '!=', null);
            })->get();
//        dd($cat);
        $subcat = SubCategory::with(['product'])->orderBy('name','asc')->select('name','id')
            ->whereHas('product', function ($query) {
                $query->where('id', '!=', null);
            })->get();
        $prod = Products::orderBy('name','asc')->select('name','id','image')->get();

        $tables = Table::orderBy('id','asc')->select('name','id')->get();

        $customers = User::orderBy('name','asc')->select('name','id')->where('role',0)->get();
//        dd($customers);

        $hold = CartHold::with(['user'])
            ->whereHas('user', function ($query) { $query->where('id', Auth::user()->id);  })
            ->orderBy('id','asc')->select('hold_id','table_no','waiter_id','customer_id')->get();
//        dd($hold);
        return view('pos', compact('cat','subcat','prod','hold','tables','customers'));
    }

    public function subcategoryItems(Request $request, $id)
    {
        if ($id == 'all'){
            $subcat = SubCategory::with(['product'])->orderBy('name','asc')->select('name','id')
                ->whereHas('product', function ($query) {
                    $query->where('id', '!=', null);
                })->get();
            $prod = Products::orderBy('name','asc')->select('name','id','image')->get();
        }else{

            $subcat = SubCategory::with(['product'])->where('category_id',$id)->orderBy('name','asc')->select('name','id')
                ->whereHas('product', function ($query) {
                    $query->where('id', '!=', null);
                })->get();
            $prod = Products::with(['category','subcategory'])->where('category_id',$id)->select('name','id','image')->orderBy('name','asc')->get();
        }

        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'sub_cat' => view('layouts.sub_cat_items',compact('subcat'))->render(),
                'cat_items' => view('layouts.category_items',compact('prod'))->render(),
            ]);
        }
        return view('pos', compact('cat','subcat','prod'));
    }

    public function categoryItems(Request $request, $id)
    {
        if ($id == 'all'){
            $prod = Products::orderBy('name','asc')->select('name','id','image')->get();
        }else{
            $prod = Products::where('sub_category_id',$id)->select('name','id','image')->orderBy('name','asc')->get();
        }

        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'cat_items' => view('layouts.category_items',compact('prod'))->render(),
            ]);
        }
        return view('pos', compact('cat','subcat','prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
