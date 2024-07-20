<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function aboutMe()
    {
        return view('about-me');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function index()
    {
        return view('index');
    }
}
