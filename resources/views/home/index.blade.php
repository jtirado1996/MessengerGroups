@extends('layouts.app')
@section('meta')
    {!! SEO::generate() !!}
@endsection
@section('content')
<style>
 input:focus, textarea:focus, select:focus{
        outline: none;
    }
</style>
<div class="container">
    <div class="">
        <!--Search-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1 class="text-center">{{ __('messages.search_title') }}</h1>
            <div class="card my-2">
                <div class="card-body">
                    <form action="{{ route('search_group') }}" method="post">
                        @csrf
                        <label for="query">{{ __('messages.search_bar') }}</label>
                        <input class="w-100" type="search" name="query" id="query" placeholder="{{ __('messages.search_bar') }}">
                        <button type="submit" class="btn btn-primary mt-3"><i class="me-2 bi bi-search"></i>{{__('messages.search_button')}}</button>
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
                    <div class="messenger_brand" style="background: {{ $post->messengerBrand->color }}; color:white">
                        <i class="m-2 {{$post->messengerBrand->icon}}"></i>{{ $post->messengerBrand->name }}
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="d-flex justify-content-center justify-content-sm-center">
                                <img src="{{ $post->image ? asset('storage/images/' . $post->image) : asset('storage/static/default.png') }}" alt="" srcset="" style="max-width: 100%;height: auto;">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="d-flex flex-column align-items-sm-center card-body">
                                <a style="text-decoration: none;" href="{{ route('groups.show_slug', ['post' => $post->id, 'slug' => str()->slug($post->title)]) }}">
                                    <div class="title" style="word-break: break-word;height: 7rem;line-height: 21px;word-break: break-all;    display: -webkit-box;    overflow: hidden;">
                                        {{ $post->title }}
                                    </div>
                                    <div class="description small d-block" style="
                                        word-break: break-word;
                                        height: 6rem;
                                        word-break: break-word;
                                        line-height: 21px;
                                        word-break: break-all;
                                        display: -webkit-box;
                                        overflow: hidden;
                                        ">
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