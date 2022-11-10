<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function postByCategory(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->paginate(15);
        return view('groups.index', compact('posts'));
    }
}
