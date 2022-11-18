@extends('layouts.app')
@section('title', 'Show Group')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <a class="btn btn-success" href="{{ url()->previous() }}">{{__('messages.back')}}</a>
            </div>
            @if ($post)
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="card my-2">
                        <div class="messenger_brand" style="background: {{ $post->messengerBrand->color }}; color:white">
                            {{ $post->messengerBrand->name }}
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <img src="{{ $post->image ? asset('storage/images/' . $post->image) : asset('storage/images/default_group.png') }}"
                                    alt="" srcset="" width="200" height="200" class="text-center">
                            </div>
                            <div class="col-md-6">
                                <div class="title text-center">
                                    {{ $post->title }}
                                </div>
                                <div class="description small text-center">
                                    {{ $post->description }}
                                </div>
                                <div class="link text-center">
                                    <a href="{{ $post->link }}">
                                        {{ __('messages.enter_group') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text text-center mx-auto" style="font: 400 5vmin 'Courgette'"><span
                        style="font-size: 10vmin;">Ooops...</span><br>There are not data with that category.</div>
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
