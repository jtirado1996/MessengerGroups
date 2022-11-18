<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class GroupSlugController extends Controller
{
    public function index(Post $post, $slug)
    {
        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->description);
        SEOTools::setTitle('Show group');
        SEOTools::setDescription('Publish your favorite whatsapp, telegram or signal group');

        // SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
        // SEOMeta::addMeta('article:section', $post->category, 'property');
        SEOMeta::addKeyword(['whatsapp group', 'telegram group', 'signal group']);

        OpenGraph::setDescription($post->description);
        OpenGraph::setTitle($post->title);
        OpenGraph::setUrl(route('groups.show_slug', ['post' => $post->id, 'slug' => str()->slug($post->title)]));
        // OpenGraph::addProperty('type', 'article');
        // OpenGraph::addProperty('locale', 'pt-br');
        // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($post->image ? asset('/storage/images/'.$post->image) : asset('/storage/images/default_group.png'));

        return view('groups.show', ['post' => $post]);
    }
}
