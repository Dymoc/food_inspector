<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('cabinet.index', [
            'user' => Auth::user(),
            'userProfile' => Profile::query()->where('user_id', Auth::user()->id)->first(),
        ]);
    }
    public function changeProfile()
    {
        return view('cabinet.profile-change', [
            'user' => Auth::user(),
            'userProfile' => Profile::query()->where('user_id', Auth::user()->id)->first(),
        ]);
    }
    public function changeProfileUpdate(Request $request, Profile $profile)
    {

        $imageName = uniqid('file-') . '.' . $request->file('avatar')->getClientOriginalExtension();
        $path = $request->file('avatar')->storeAs('user',  $imageName, 'public');
        $profile->avatar = $path;
        $profile->firstname = $request->input('firstname');
        $profile->lastname = $request->input('lastname');
        $profile->birthday = $request->input('birthday');
        $profile->preferences = $request->input('preferences');
        $profile->phone = $request->input('phone');
        $profile->adress = $request->input('adress');

        $profile = $profile->save();
        return back();
       // return json_encode(['success'=>1]);
    }
}
