<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function products()
    {
        $content = 'Truyen bien bang cach su dung ham compact()';
        $products = [
            'name' => 'Iphone 14',
            'price' => 15
        ];
        return view('products.index', compact('content', 'products'));
    }
    public function about()
    {
        return view('about.index');
    }

    public function details($productName, $id)
    {
        return 'products name '. $productName. '<br>'. 'product ID '. $id;
    }
}

