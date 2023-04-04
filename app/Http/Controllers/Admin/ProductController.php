<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required',
            'thumbnail' => 'nullable|image',
        ]);

        $data = $request->all();
        $data['thumbnail'] = Product::uploadImage($request);
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Товар добавлен');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|integer',
        'category_id' => 'required',
        'thumbnail' => 'nullable|image',
        ]);

        $product = Product::find($id);
        $data = $request->all();

        if ($file = Product::uploadImage($request, $product->thumbnail)) {
            $data['thumbnail'] = $file;
        }
        $product->update($data);
        
        return redirect()->route('products.index')->with('success', 'Товар отредактирован');
    }

    public function destroy()
    {
        //
    }
}
