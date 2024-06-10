<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    //
    public function index()
    {
        $foods = Food::where('name','=','vanthuc')
        ->get();
        return view('foods.index', compact('foods'));
    }
    public function create()
    {
        return view('foods.create');
    }
    public function store(Request $request)
    {
        return view('foods.store');
    }
    public function update($id)
    {
        echo "UPdate";
        //return view('foods.create');
    }
}
