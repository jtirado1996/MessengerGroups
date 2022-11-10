@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
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
                                    <img src="{{ $post->image ? asset('storage/images/' . $post->image) : asset('storage/default_group.png') }}"
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
                <div class="text text-center mx-auto" style="font: 400 5vmin 'Courgette'"><span style="font-size: 10vmin;">Ooops...</span><br>There are not data with that category.</div>
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
