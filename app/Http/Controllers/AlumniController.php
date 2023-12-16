<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\alumni;

class AlumniController extends Controller
{
    //
    function alumni(Request $req){
        $credentials = $req->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboardalumni');
        }

        return redirect()->back();
    }

    function show(){
        return view('loginalumni');
    }

    function view(){
        return view('dashboardalumni');
    }

    function register(){
        return view('register');
    }



    function daftar(Request $req){

        $req->validate([
            'nisn' => 'required|max:12',
            'nama_lengkap' => 'required|max:60',
            'email' => 'required|max:15',
            'password' => 'required|max:12',
            'thn_lulus' => 'required|max:12',
            'foto' => 'required|max:12'
        ]);

        $alumni = alumni::create([
            'nisn' => $req->nisn,
            'nama_lengkap' =>$req->nama_lengkap,
            'email' => $req->email,
            'password' => $req->password,
            'thn_lulus' => $req->thn_lulus,
            'foto' =>$req->foto
        ]);


        return redirect('/login/alumni');


        // $validate['password'] = bcrypt($req->password);

        // Alumni::create($validate); // Note: Use 'User' instead of 'user' for the model

    }

}
