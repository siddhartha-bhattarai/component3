<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view ('admin.register-edit')->with('users',$users);
    }
    public function profileupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        
        $users->update();

        return redirect('/rolereg')->with('status',"Changes saved successfully.");
    }
    public function profiledelete($id)
    {
        $users = User::findOrFail($id);
         
        $users->delete();

        return redirect('/rolereg')->with('status',"Profile deleted successfully.");
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

}
