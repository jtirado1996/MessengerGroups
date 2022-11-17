<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        seo()->title('Home');
        seo()->description('List of public groups of Whatsapp, Telegram and Signal');
        // seo()->twitter('card', 'Share your favorite whatsapp, telegram and signal groups');
        seo()->og('site_name', 'guatsappgroup');
        seo()->charset();
        $posts = Post::with(['categories', 'messengerBrand'])
            ->take(10)
            ->get();
        $categories = Category::all();
        return view('home.index', compact('posts', 'categories'));
    }
}
