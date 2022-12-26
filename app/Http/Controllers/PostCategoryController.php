<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class PostCategoryController extends Controller
{
    public function postByCategory(Category $category, $slug)
    {
        SEOTools::setTitle('GuatsAppGroups - Home');
        SEOTools::setDescription('Publish your favorite whatsapp, telegram or signal group');
        SEOTools::opengraph()->setUrl('https://guatsappgroup.xyz/');
        SEOTools::setCanonical('https://guatsappgroup.xyz/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('image', 'articles');

        SEOTools::jsonLd()->addImage('https://a.pomf.cat/khejdj.jpeg');

        $posts = Post::where('category_id', $category->id)->paginate(15);
        return view('groups.index', compact('posts'));
    }
}
