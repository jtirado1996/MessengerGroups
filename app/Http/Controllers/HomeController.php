<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('GuatsAppGroups - Home');
        SEOTools::setDescription('Publish your favorite whatsapp, telegram or signal group');
        SEOTools::opengraph()->setUrl('https://guatsappgroup.xyz/');
        SEOTools::setCanonical('https://guatsappgroup.xyz/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('image', 'articles');

        SEOTools::jsonLd()->addImage('https://a.pomf.cat/khejdj.jpeg');

        $posts = Post::with(['categories', 'messengerBrand'])
            ->take(10)
            ->orderByDesc('id')
            ->get();
        $categories = Category::all();
        return view('home.index', compact('posts', 'categories'));
    }
}
