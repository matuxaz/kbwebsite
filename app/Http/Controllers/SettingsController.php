<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Models\User;

class SettingsController extends Controller
{
    public function index(Request $request){
        return view('pages/settings', array('user' => Auth::user()));
    }
    public function store(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300, 300)->save(public_path('/avatars/'.$filename));


            $user=Auth::user();
            $user->profile_photo_path = $filename;
            $user->save();
            return view('pages/settings', array('user' => Auth::user()));
        }else{return redirect()->back();}

    }
}
