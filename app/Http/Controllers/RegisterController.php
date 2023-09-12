<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('login.register');
    }

    public function registerAction(Request $request)
    {
        $register = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        if($register){
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ]);

            return redirect('/login');
        }

        return redirect('/register');
    }
}
