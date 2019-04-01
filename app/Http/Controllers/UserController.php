<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function profile(){
        $user = Auth::user();
//        dd($user);
        $title = trans('Profile');
        return view('pages.profile', compact('title', 'user'));
    }

    public function profileEditPost(Request $request){
        $user = Auth::user();

        //Validating
        $rules = [
            'email'    => 'required|email|unique:users,email,'.$user->id,
            'tel' => 'required|max:255|unique:users,tel,'.$user->id,
        ];
        $this->validate($request, $rules);

        $inputs = array_except($request->input(), ['_token']);
        try {

            $update = User::whereId($user->id)->update($inputs);

            if ($update){
                return redirect('profile')->with('success', trans('Profile Update  Successfully.'));
            }
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return back()->with('error', trans('Duplicate entry'))->withInput($request->input());
            }
        }
        return back()->with('error', trans('something_went_wrong'))->withInput($request->input());

    }

    public function changePassword()
    {
        $title = trans('Change Password');
        return view('customer.Cpassword', compact('title'));
    }

    public function changePasswordPost(Request $request)
    {
        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|confirmed',
            'new_password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        //$new_password_confirmation = $request->new_password_confirmation;

        if(Auth::check())
        {
            $logged_user = Auth::user();

            if(Hash::check($old_password, $logged_user->password))
            {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();
                return redirect()->back()->with('success', trans('Profile Update  Successfully.'));
            }
            return redirect()->back()->with('error', trans('Wrong Old Password'));
        }

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
            'status' => 0,
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
