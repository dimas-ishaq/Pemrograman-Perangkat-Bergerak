<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index', compact(['products','categories']));
    }
   public function store(Request $request)
{
    // 1. Validasi Data Input
    $validated = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|numeric|min:1',
        'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        'category_id' => 'required|exists:categories,id',
        'status' => 'required|in:0,1',
    ]);
    
    // 2. Simpan File Gambar (Asumsi file PASTI ADA karena sudah lolos validasi 'required')
    // Jika validasi lolos, file pasti ada.
    $path = $request->file('image')->store('products', 'public');

    // 3. Simpan Data ke Database
    Product::create([
        'name' => $validated['name'],
        'price' => $validated['price'],
        'stock' => $validated['stock'],
        'image' => $path, // Simpan path file
        'category_id' => $validated['category_id'],
        // Laravel akan mengkonversi '0'/'1' ke boolean otomatis.
        'status' => $validated['status'], 
    ]);

    // 4. Pengalihan Berhasil
    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
}
}
