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
            return redirect('imperfect/home');
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

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function editProfile(Request $req)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $req->nama;
        $user->alamat = $req->alamat;
        $user->email = $req->email;
        $user->kode_pos = $req->pos;

        $image = $req->file('profile');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/photo_profile/'), $fileName);
        $user->foto = $fileName;
        
        $user->save();

        return redirect('/imperfect/profile');
    }
}
