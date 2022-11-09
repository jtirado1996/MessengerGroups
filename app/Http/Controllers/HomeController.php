<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['categories','messengerBrand'])->take(10)->get() ;
        $categories = Category::all();
        return view('home.index', compact('posts', 'categories'));
    }
}
