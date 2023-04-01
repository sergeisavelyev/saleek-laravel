<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        return view('admin.products.update');
    }

    public function destroy()
    {
        //
    }
}
