<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function registered()
    {
        $products = Product::all();
        return view('products.register')->with('products', $products);
    }

    public function registeredit(Request $request, $product_id)
    {
        $products = Product:: findOrFail($product_id);  
        return view('products.register-edit')->with('products', $products);
    }

    public function productupdate(Request $request, $id)
    {
        $products = Product::find($id);
        $products->title = $request->input('title');
        $products->firstname = $request->input('firstname');
        $products->mainname = $request->input('mainname');
        $products->price = $request->input('price');
        $products->update();

        return redirect('/product-edit')->with('status',"Changes saved successfully.");
    }
    public function productdelete($id)
    {
        $products = Product::findOrFail($id);
         
        $products->delete();

        return redirect('/product-edit')->with('status',"Product deleted successfully.");
    }

    public function productcreate()
    {
        return view('products.product-add');
    }
     public function store(Request $request)
     {
        $product=new Product();
        $product->title=$request->title;
        $product->firstname =$request->firstname;
        $product->mainname =$request->mainname;
        $product->type=$request->type;
        $product->price=$request->price; 
        $product->pageslength=$request->playlength;
        $product->save();
        return redirect('/product-edit')->with('status',"Product added successfully.");
     }

     public function index()
     {
        $products = Product::all();
        return view('products.index')->with('products', $products);
     }
}
