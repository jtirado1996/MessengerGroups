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
                            <div class="card-body">
                                <div class="messenger_brand">
                                    {{ $post->messengerBrand->name }}
                                </div>
                                <img src="" alt="" srcset="">
                                <div class="title">
                                    {{ $post->title }}
                                </div>
                                <div class="description">
                                    {{ $post->description }}
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
                                {{ $category->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
