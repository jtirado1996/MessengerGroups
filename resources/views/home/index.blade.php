@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!--Search-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 class="text-center">{{ __('messages.search_title') }}</h1>
                <div class="card my-2">
                    <div class="card-body">
                        <input type="search" name="search-group" id="search-group"
                            placeholder="{{ __('messages.search_bar') }}">
                    </div>
                </div>
            </div>
            <!--Latest groups-->
            <div class="row">
                <h1 class="text-center">{{ __('messages.latest_groups') }}</h1>
                @foreach ($posts as $post)
                    <div class="col-xs-12 col-sm-12 col-md-3 ">
                        <div class="card my-2">
                            <div class="messenger_brand" style="background: {{ $post->messengerBrand->color }}; color:white">
                                {{ $post->messengerBrand->name }}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ $post->image ? asset("storage/images/".$post->image) : asset("storage/default_group.png") }}" alt="" srcset="" width="100" height="100">
                                </div>
                                <div class="col-md-6">
                                    <div class="title">
                                        {{ $post->title }}
                                    </div>
                                    <div class="description small   ">
                                        {{ Str::limit($post->description, 255) }}
                                    </div>
                                    <div class="link">
                                        <a href="{{ $post->link }}">
                                            {{ __('messages.enter_group') }}
                                        </a>
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
                            <img src="" alt="" srcset="">
                            <div class="title">
                                <a href="{{ route('posts.category',$category->id) }}">{{ $category->name }}</a>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
