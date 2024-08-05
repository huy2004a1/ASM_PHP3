<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.update', compact('article', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'views' => 'required|integer|min:0',
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category_id');
        $article->views =  $request->input('views');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'views' => 'required|integer|min:0',
        ]);

       
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category_id');
        $article->views = $request->input('views');

        if ($request->hasFile('image')) {
            
            if ($article->image && file_exists(public_path('images/' . $article->image))) {
                unlink(public_path('images/' . $article->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }


    public function destroy(Article $article)
    {
        if ($article->image) {
            unlink(public_path('images/' . $article->image));
        }
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Tin tức đã được xóa thành công.');
    }
}
