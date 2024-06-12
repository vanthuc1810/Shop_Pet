<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    //
    public function create()
    {
        return view('account.create');
    }

    public function postCreate(Request $req)
    {
       
        $validated = $req -> validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        
        $req ->merge(['password' => Hash::make($req->password)]);

        User::create($req->all());
        return redirect() -> route('login');
    }
    public function login(Request $request)
    {
        $credentials =  $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) 
        {
            return redirect()->route('index');
        }
        return redirect() -> back() -> with('error','Nhap thong tin sai');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    public function index()
    {

        return view('account.index');
    }
}
