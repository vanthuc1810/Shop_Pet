<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {

        return view('account.edit');
    }
    public function index()
    {

        return view('account.index');
    }
}
