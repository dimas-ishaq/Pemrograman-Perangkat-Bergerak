<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::with('category')->paginate(10);
        $categories = Category::all();
        return view('admin.products.index', compact(['products', 'categories']));
    }
    public function store(Request $request)
    {
        $user_id = Auth::id();

        // 1. Validasi Data Input
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:0,1',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk minimal Rp 0.',
            'stock.required' => 'Stok produk wajib diisi.',
            'stock.numeric' => 'Stok produk harus berupa angka.',
            'stock.min' => 'Stok produk minimal 1.',
            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.string' => 'Deskripsi produk harus berupa teks.',
            'image.required' => 'Gambar produk wajib diisi.',
            'image.mimes' => 'Gambar produk harus dalam format JPG, PNG, atau JPEG.',
            'image.max' => 'Gambar produk maksimal 2 MB.',
            'category_id.required' => 'Kategori produk wajib dipilih.',
            'category_id.exists' => 'Kategori produk tidak ditemukan.',
            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus 0 atau 1.',

        ]);

        // 2. Simpan File Gambar (Asumsi file PASTI ADA karena sudah lolos validasi 'required')
        // Jika validasi lolos, file pasti ada.
        $path = $request->file('image')->store('products', 'public');

        // 3. Simpan Data ke Database
        Product::create([
            'user_id' => $user_id,
            'slug' => Str::slug($validated['name']), // Membuat slug dari nama produk
            'name' => $validated['name'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'description' => $validated['description'],
            'image' => $path, // Simpan path file
            'category_id' => $validated['category_id'],
            // Laravel akan mengkonversi '0'/'1' ke boolean otomatis.
            'status' => $validated['status'],
        ]);

        // 4. Pengalihan Berhasil
        return back()->with('success', 'Produk berhasil ditambahkan!');
    }
}
