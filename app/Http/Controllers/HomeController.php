<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function storeItem(Request $request)
    {
        $data = [
            'name'             => $request->name,
            'age'             => $request->age,
            'profession'             => $request->profession,
        ];
        $create = Data::create($data);
        return $data;
    }

    public function getItems()
    {
        $data = Data::all();
        return $data;
    }

    public function deleteItem(Request $req)
    {
//        $delete = Data::where('id', $req->id)->delete();
        $data = Data::find($req->id)->delete();
    }

    public function editItem(Request $req, $id)
    {
        $data = Data::where('id', $id)->first();
        $data->name = $req->get('val_1');
        $data->age = $req->get('val_2');
        $data->profession = $req->get('val_3');
        $data->save();
        return $data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
