<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request)
    {
        $data = $request->validated();
        $posts = Post::where(function ($query) use($data) {
            $query->where('title', 'LIKE', '%' . $data['query'] . '%')->orWhere('description', 'LIKE', '%' . $data['query'] . '%');
        })
        ->orderBy('created_at', 'DESC')
        ->paginate(15);
        return view('groups.index', compact('posts'));
    }
}
