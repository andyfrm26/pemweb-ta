<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect('/home');
        } else {
            return redirect('login');
        }
    }

    
    public function register(Request $req)
    {
        if($req->password != $req->password_confirm) return redirect('sign-up');
        $user = new User;

        $user->email            = $req->email;
        $user->password         = bcrypt($req->password);
        $user->name             = $req->name;
        $user->alamat           = $req->alamat;
        $user->kode_pos         = $req->kodepos;
        
        if($user->save()) return redirect('login');
    }
}
