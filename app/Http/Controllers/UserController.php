<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $title = trans('Users');
        $users= User::orderBy('updated_at', 'desc')->get();
        return view('pages.users.users', compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = trans('Users Create');
        return view('pages.users.add1', compact('title'));
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
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'tel' => 'string|max:255|unique:users',
            'password' => 'required|string|min:2',
            'role' => 'required|string',
        ]);
        $data = [
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email,
            'gender' => $request->gender,
            'role' => $request->role,
            'status' => 1,
            'password' => Hash::make($request->password),
        ];
//        dd($data);
        $create = User::create($data);
        return back()->with('success', 'User created successfully!');

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
        $title = trans('User Edit');
        $user = User::where('id',$id)->first();
//        dd($user);
//
//        dd('sisi');
        return view('pages.users.edit', compact('title','user'));
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,'.$id,
            'tel' => 'required|max:255|unique:users,tel,'.$id,
            'role' => 'required|string',
        ]);
        $data = [
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email,
            'gender' => $request->gender,
            'role' => $request->role,
        ];

        try {

            $update = User::whereId($id)->update($data);

            if ($update){
                return redirect('users')->with('success', trans('User Updated  Successfully.'));
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activate_user(Request $request, $id)
    {
        $update = User::whereId($id)->update(['status' => 1]);

        if ($update){
            if ($request->ajax()) { //checking if input is ajax
                return response()->json(['success' => 'User successfully activated']);
            }
            return redirect()->back()->with('success', 'User successfully activated');
        }
        return redirect()->back()->with('error', 'Ooops, something went wrong');
    }

    public function deactivate_user(Request $request, $id)
    {
        $update = User::whereId($id)->update(['status' => 2]);

        if ($update){
            if ($request->ajax()) { //checking if input is ajax
                return response()->json(['success' => 'User successfully deactivated']);
            }
            return redirect()->back()->with('success', 'User successfully deactivated');
        }
        return redirect()->back()->with('error', 'Ooops, something went wrong');
    }
}
