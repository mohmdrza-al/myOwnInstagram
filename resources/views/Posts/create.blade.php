@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new post</div>

                    <div class="card-body">
                        <form method="POST" action="/post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>

                                <input id="image" type="file"
                                       class="form-control @error('image') is-invalid @enderror" name="image"
                                       value="{{ old('image') }}" required autocomplete="image" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="location"
                                       class="col-md-4 col-form-label">Location</label>

                                <input id="location" type="location"
                                       class="form-control @error('location') is-invalid @enderror" name="location"
                                       value="{{ old('location') }}" required autocomplete="location">

                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="caption"
                                       class="col-md-4 col-form-label">Caption</label>

                                <input id="caption" type="caption"
                                       class="form-control @error('caption') is-invalid @enderror" name="caption"
                                       value="{{ old('caption') }}" required autocomplete="caption">

                                @error('caption')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <button class="btn btn-primary">Add New Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
