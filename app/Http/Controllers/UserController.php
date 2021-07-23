<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    public function index()
    {
        $products = Product::all();
        return view('user.index')->with('products', $products);
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('user.select')->with('products', $products);
    }
}
