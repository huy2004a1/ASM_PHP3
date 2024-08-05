<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //admin
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.update', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
    
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);
       
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
{
    try {
    
        $category->articles()->delete();

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Danh mục đã được xóa thành công.');
    } catch (\Exception $e) {

        return redirect()->route('categories.index')->with('error', 'Không thể xóa danh mục. Nó có thể đang được sử dụng.');
    }
}

}
