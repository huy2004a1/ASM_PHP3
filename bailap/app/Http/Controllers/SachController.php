<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class SachController extends Controller
{
    public function show($id)
    {
        $user = User::with('userDetail')->findOrFail($id);
        return view('users.user', compact('user'));
    }

    public function author($id)
    {
        $author = Author::with('books')->findOrFail($id);
        return view('users.author', compact('author'));
    }

    public function category($id)
    {
        $category = Category::with('books')->findOrFail($id);
        return view('users.category', compact('category'));
    }

    public function book($id)
    {
        $book = Book::with('categories')->findOrFail($id);
        return view('users.book', compact('book'));
    }
}
