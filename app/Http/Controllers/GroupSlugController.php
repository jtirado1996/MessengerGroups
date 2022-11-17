<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class GroupSlugController extends Controller
{
    public function index(Post $post, $slug)
    {
        return view('groups.show', ['post' => $post]);
    }
}
