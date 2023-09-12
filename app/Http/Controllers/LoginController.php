<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function loginAction(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();

            $user = User::where('username', $request->username)->first();
            $device = Device::create([
                'user_id' => $user->id,
                'device' => $request->visitor()->device(),
                'browser' => $request->visitor()->browser(),
                'platform' => $request->visitor()->platform()
            ]);
            $user->devices()->save($device);

            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Device::orderByDesc('id')->first()->update([
            'logout_at' => now()
        ]);

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
