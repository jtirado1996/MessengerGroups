@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('grupos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{ __('messages.form_create_group.title') }}</label>
                        <input type="text" class="form-control" id="title" name="title"
                            aria-describedby="titleHelp">
                    </div>
                    <div class="mb-3">
                        <label for="description"
                            class="form-label">{{ __('messages.form_create_group.description') }}</label>
                        <textarea id="description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">{{ __('messages.form_create_group.link') }}</label>
                        <input id="link" name="link" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">{{ __('messages.form_create_group.category') }}</label>
                        <select class="form-select" name="category_id" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="messenger_brand"
                            class="form-label">{{ __('messages.form_create_group.messenger_brand') }}</label>
                        <select class="form-select" name="messenger_brand_id" id="messenger_brand">
                            @foreach ($messengerBrands as $messengerBrand)
                                <option value="{{ $messengerBrand->id }}">{{ $messengerBrand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">{{ __('messages.form_create_group.image') }}</label>
                        <input type="file" id="image" name="image" accept="image/*" onchange="showPreview(event);">
                    </div>

                    <div class="mb-3 form-check">
                        <div class="preview">
                            <img id="file-ip-1-preview" width="300" height="300" style="display: none;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>ReCaptcha:</strong>
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>  
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endpush
