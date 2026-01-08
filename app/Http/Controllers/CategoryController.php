<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|string',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.max' => 'Nama kategori maksimal 255 karakter.',
            'description.required' => 'Deskripsi kategori wajib diisi.',
            'description.string' => 'Deskripsi kategori harus berupa teks.',
        ]);

        try {
            Category::create($validated);
            return back()->with('success', 'Kategori berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error',  'Terjadi kesalahan saat menambahkan kategori ');
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|string',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.max' => 'Nama kategori maksimal 255 karakter.',
            'description.required' => 'Deskripsi kategori wajib diisi.',
            'description.string' => 'Deskripsi kategori harus berupa teks.',
        ]);

        try {
            $category = Category::findOrFail($id);
            $category->update($validated);
            return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error',  'Terjadi kesalahan saat memperbarui kategori ');
        }
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
