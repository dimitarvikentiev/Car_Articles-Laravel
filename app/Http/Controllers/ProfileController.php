<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.profile')->with(['user' => $user]);;
    }

    public function update_avatar(Request $request){
        //Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 250)->insert(public_path('uploads/images/watermark.png'), 'bottom-right')->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

            return view('user.profile')->with(['user' => $user]);;
        }
    }
}
