@extends('layouts.app')
@section('meta')
{!! SEO::generate() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <!--Search-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 class="text-center">{{ __('messages.search_title') }}</h1>
                <div class="card my-2">
                    <div class="card-body">
                        <form action="{{ route('search_group') }}" method="post">
                            @csrf
                            <label for="query">{{ __('messages.search_bar') }}</label>
                            <input class="w-100" type="search" name="query" id="query"
                                placeholder="{{ __('messages.search_bar') }}">
                        </form>
                    </div>
                </div>
            </div>
            <!--Latest groups-->
            <div class="row">
                <h1 class="text-center">{{ __('messages.latest_groups') }}</h1>
                @foreach ($posts as $post)
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <div class="card my-2">
                            <div class="messenger_brand"
                                style="background: {{ $post->messengerBrand->color }}; color:white">
                                {{ $post->messengerBrand->name }}
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="d-flex justify-content-center justify-content-sm-center">
                                        <img src="{{ $post->image ? asset('storage/images/' . $post->image) : asset('storage/images/default_group.png') }}"
                                            alt="" srcset=""
                                            style="max-width: 100%;height: auto;">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="d-flex flex-column align-items-sm-center card-body">
                                        <a
                                            style="text-decoration: none;"
                                            href="{{ route('groups.show_slug', ['post' => $post->id, 'slug' => str()->slug($post->title)]) }}">
                                            <div class="title" style="word-break: break-word;">
                                                {{ $post->title }}
                                            </div>
                                            <div class="description small d-block" style="word-break: break-word;">
                                                {{ Str::limit($post->description, 255) }}
                                            </div>
                                        </a>
                                        <div class="link my-3 mx-auto">
                                            <a href="{{ $post->link }}">
                                                {{ __('messages.enter_group') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--Categories-->
            <div class="row">
                <h1 class="text-center">{{ __('messages.categories') }}</h1>
                @foreach ($categories as $category)
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="card my-2">
                            <a href="{{ route('posts.category', ['category' => $category->id,'slug' => str()->slug($category->name)]) }}" style="text-decoration: none">
                                <div class="text-center">
                                    <i class="{{ $category->icon }}" style="font-size: 6rem;color: black;"></i>

                                    <div class="title">
                                        {{ __("categories.{$category->translation_key}") }}

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
