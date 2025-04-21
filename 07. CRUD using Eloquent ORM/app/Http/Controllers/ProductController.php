<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view("products.index",compact("products"));
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){
        $product = new Product();
        $product->productName = $request->input("productName");
        $product->price = $request->input("price");
        $product->quantity = $request->input("quantity");
        $product->quality = $request->input("quality");

        $product->save();
        return redirect("/");
    }

    public function edit($id){
        $product = Product::find($id);
        return view("products.edit", compact("product"));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->productName = $request->productName;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->quality = $request->quality;

        $product->save();
        return redirect("/");
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return redirect("/");
    }
}
