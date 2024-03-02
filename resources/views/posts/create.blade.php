@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div class="container ">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1 class="text-3xl">Add New Post</h1>
                    </div>

                    <div class="row ">
                        <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                        <input type="file" class="form" id="image" name="image">
                        @error('image')
                                <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="col-2 row pt-4">
                        <button class="btn btn-primary">Add new post</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
