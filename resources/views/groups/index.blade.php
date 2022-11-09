@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="card my-2">
                        <div class="messenger_brand my-1">
                            {{ $post->messengerBrand->name }}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $post->image }}" alt="" srcset="">
                            </div>
                            <div class="col-md-6">
                                <div class="title">
                                    {{ $post->title }}
                                </div>
                                <div class="description">
                                    {{ $post->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
