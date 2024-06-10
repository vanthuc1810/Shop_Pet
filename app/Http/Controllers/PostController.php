<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $post = DB::select("SELECT * FROM posts;");
        $post = DB::table("posts")
        -> where('id',2)
        -> delete();
        dd($post);
        //return view('posts.index');
    }
}
