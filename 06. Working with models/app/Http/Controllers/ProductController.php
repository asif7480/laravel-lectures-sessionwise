<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("products", compact("products"));
    }

    public function create(){
        return view("addProduct");
    }

    public function store(Request $request){
        $product = new Product();
        $product->productName = $request->input("productName");
        $product->price = $request->input("price");
        $product->quantity = $request->input("quantity");
        $product->quality = $request->input("quality");
        $product->purchasedDate = $request->input("purchasedDate");

        $product->save();

        return redirect("products");
    }

}
