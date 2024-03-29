<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all() -> Where('delete_flag','0');
        return view('product.menu',['items' => $items]);
    }

    public function detail(Request $request)
    {
        $items = Product::nameEqual($request -> goods_name) -> first();
        return view('product.detail', ['items' => $items]);
    }
}
