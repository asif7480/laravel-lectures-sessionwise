<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "productName" => "string|required",
            "price" => "numeric|required",
            "quantity" => "numeric|required",
        ]);

        $product = new Product();
        $product->productName = $request->input("productName");
        $product->price = $request->input("price");
        $product->quantity = $request->input("quantity");

        $product->save();
        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view("products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "productName" => "string|required",
            "price" => "numeric|required",
            "quantity" => "numeric|required",
        ]);

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        $product->delete();
        return redirect()->route("products.index");
    }
}
