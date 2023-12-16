<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    function auth(Request $req){
        $credentials = $req->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }

        return redirect()->back();
    }

    function view()
    {
        return view('dashboard');
    }


    function alumni()
    {
        return view('dashboardalumni');
    }
    // function register(){
    //     return view('register');
    // }



    // function daftar(Request $req){

    //     $validate = $this->validate($req, [
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'password' => 'required|min:5'
    //     ]);

    //     $validate['password'] = bcrypt($req->password);

    //     User::create($validate); // Note: Use 'User' instead of 'user' for the model

    //     return redirect('/');
    // }

    function show(){
        return view('login');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}



