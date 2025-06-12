<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with("product")->get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        Category::create($request->only("categoryName"));
        return redirect("/categories");
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->only('categoryName'));
        return redirect('/categories');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
