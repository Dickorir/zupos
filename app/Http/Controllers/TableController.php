<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Tables');
        $tables = Table::orderBy('updated_at', 'desc')->get();

        return view('pages.tables.view', compact('title','tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = trans('Tables');
        return view('pages.tables.add', compact('title','tables'));
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
            'name' => 'required|string|max:255|unique:tables',
        ]);

        try {
            $create = Table::create(['name' => $request->name]);
            if ($create){
                return redirect('table')->with('success', trans('Table '.$request->name.' created successfully.'));
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
        $title = trans('Table Edit');
        $table = Table::where('id',$id)->first();
//        dd($prod_var);

        return view('pages.tables.edit', compact('title','table'));
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
        $table = Table::where('id',$id)->first();
//        dd($request);
        $this->validate($request, [
            'name'    => 'required|unique:tables,name,'.$table->id,
        ]);
        $slug = str_slug($request->name,'_');

        Table::whereId($id)->update([
            'name'              => $request->name,
        ]);
        return redirect('table')->with('success', trans('Table '.$request->name.' updated successfully.'));
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
