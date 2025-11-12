<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|string',
        ]);

        Category::create([
            'name' => $validated["name"],
            'description'=>$validated["description"]
        ]);

        return redirect()->route('category.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
