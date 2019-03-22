<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;

class SettingsController extends Controller
{
    public function contactinfo(){
        $title = trans('Contact Info');
//        dd(get_option());
        return view('settings.contactinfo', compact('title'));
    }

    public function update(Request $request) {
        $inputs = array_except($request->input(), ['_token']);
        foreach ($inputs as $key => $value){
            $opt = Option::where('option_key',$key)->first();
            if (!$opt){
                Option::create(['option_key' =>$key,'option_value' =>$value]);
            }
        }

        foreach($inputs as $key => $value) {
            $option = Option::firstOrCreate(['option_key' => $key]);
            $option -> option_value = $value;
            $option->save();
        }
        //check is request comes via ajax?
        if ($request->ajax()){
            return ['success'=>1, 'msg'=>trans('app.settings_saved_msg')];
        }
        return redirect()->back()->with('success', trans('app.settings_saved_msg'));
    }
}
