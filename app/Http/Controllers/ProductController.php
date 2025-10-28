<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        return view('product.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'images' => 'required|mimes:jpg,png,jpeg|max:2048',
            'category' => 'required|exist:categories,id',
            'status' => 'required|in:draft,published'
        ]);

        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'image' => $path, // Simpan path file
            'category_id' => $validated['category_id'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
