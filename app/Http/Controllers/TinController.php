<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function contact()
    {
        return view('member.contact');
    }

    public function aboutMe()
    {
        return view('member.about-me');
    }

    public function tinTuc(Request $request)
    {
        $allArticles = Article::All();

        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');

        $allArticles = Article::where('title', 'LIKE', '%' . $query . '%')
            ->get();

        return view('member.tintuc', compact('allArticles', 'query'));
    }
    public function aboutUs()
    {
        return view('member.about-us');
    }

    public function index()
    {
        $articles = Article::paginate(1);

        $categories = Category::All();

        $views = Article::orderBy('views', 'desc')->limit(3)->get();

        $oneNews = Article::latest()->limit(1)->get();

        $News = Article::latest()->limit(5)->get();

        return view('index', compact('articles', 'views', 'oneNews', 'News', 'categories'));
    }


    public function detail($id)
    {

        $details = Article::findOrFail($id);

        $relatedArticles = Article::where('category_id', $details->category_id)
            ->where('id', '!=', $id)
            ->take(5)
            ->get();
        return view('member.detail', compact('details', 'relatedArticles'));
    }

    public function thoisu()
    {
        $category = Category::findOrFail(4);

        $articles = $category->articles()->get();

        return view('member.thoisu', compact('articles', 'category'));
    }

    public function thethao()
    {
        $category = Category::findOrFail(1);

        $articles = $category->articles()->get();

        return view('member.thethao', compact('articles', 'category'));
    }

    public function nghethuat()
    {
        $category = Category::findOrFail(2);

        $articles = $category->articles()->get();

        return view('member.nghethuat', compact('articles', 'category'));
    }
}
