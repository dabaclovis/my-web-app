<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            "blogs" => $user->articles,
        ]);
    }

    public function profile()
    {
        return view('users.profile',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            "user" => $user,
        ]);
    }

    public function setting(Request $request)
    {
        return view('users.setting');
    }

    public function uploadAvatar(Request $request)
    {
        $this->validate($request, [
            'avatar' => ['required','max:2048'],
        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->hashName();
            $path = $request->file('avatar')->storeAs('users',$filename,'public');

            User::where('id',Auth::user()->id)->update([
                'avatar' => $filename,
            ]);
        }
        return back();
    }
}
