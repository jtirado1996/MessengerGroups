<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SitemapXMLController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->view('index',
            compact('categories')
        )->header('Content-Type', 'text/xml');
    }
}
