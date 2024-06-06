<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $content = 'Truyen bien bang cach su dung ham compact()';
        $products = [
            'name' => 'Iphone 14',
            'price' => 15
        ];
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
}
