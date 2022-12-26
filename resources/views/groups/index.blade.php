@extends('layouts.app')
@section('title', 'All Groups')
@section('meta')
    {!! SEO::generate() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <a class="btn btn-success" href="{{ url()->previous() }}">{{__('messages.back')}}</a>
            </div>
            @if (!$posts->isEmpty())
                @if (session('success'))
                    <h1>{{ session('success') }}</h1>
                @endif

                @foreach ($posts as $post)
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="card my-2">
                            <div class="messenger_brand" style="background: {{ $post->messengerBrand->color }}; color:white">
                                {{ $post->messengerBrand->name }}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ $post->image ? asset('storage/images/' . $post->image) : asset('storage/images/default_group.png') }}"
                                        alt="" srcset="" width="100" height="100">
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
                <div class="d-flex justify-content-center">
                    {!! $posts->links() !!}
                </div>
            @else
                <div class="text text-center mx-auto" style="font: 400 5vmin 'Courgette'">
                    {{__('messages.not_group')}}
                    <a class="btn btn-success" style="color:white;" aria-current="page"
                            href="{{ route('grupos.create') }}">
                            {{ __('messages.create_new_group') }}
                        </a>
                    <img  style="width: 40%;" src="{{asset('storage/static/nothing.webp')}}" alt="nothing here">
                </div>            
            @endif

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function copyToClipBoard() {
            // Get the text field
            var copyText = document.getElementById("group-link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

        }
    </script>
@endpush
