<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;
use App\Message;
use Illuminate\Support\Facades\Input;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Products::get();
        return view("guest.index",["products"=>$products]);
    }

    public function single($id)
    {
        $products=Products::where('id',$id)->firstOrFail();
        $comments=Comments::where('product_id',$id)->get();
        return view("guest.single",["products"=>$products,"comments"=>$comments]);
    }

    public function product()
    {
        $products=Products::get();
        return view("guest.product",["products"=>$products]);

    }

    public function comment(Request $request)
    {
        Comments::create([
            "product_id"=>$request->input("product_id"),
            "name"=>$request->input("name"),
            "comment"=>$request->input("comment")
        ]);
        return redirect()->back();
    }

    public function adminIndex()
    {
        $products=Products::get();
        return view("admin.index",["products"=>$products]);
    }
    public function adminStore(Request $request)
    {
        if (Input::file("img")) {
            $dp=public_path('images');
            $filename=uniqid().".jpg";
            $dp=Input::file('img')->move($dp,$filename);
            }
        Products::create([
            "name"=>$request->input("name"),
            "price"=>$request->input("price"),
            "description"=>$request->input("description"),
            "img"=>$filename
            
        ]);
        return redirect()->route("admin");
    }
    public function delete(Request $request)
    {
        Products::where('id',$request->input('id'))->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $products=Products::where('id',$id)->firstOrFail();
        return view('admin.edit',['products'=>$products]);
    }
    public function update(Request $request)
    {
        Products::where('id',$request->input('id'))->update([
            "name"=>$request->input("name"),
            "price"=>$request->input("price"),
            "description"=>$request->input("description"),
            
        ]);
        return redirect()->route("admin");
    }
}
