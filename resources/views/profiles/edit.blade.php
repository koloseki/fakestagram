@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1 class="text-3xl">Edit Profile</h1>
                    </div>

                    <div class="row ">
                        <label for="title" class="col-md-4 col-form-label ">Title</label>

                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}"  autocomplete="title">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row ">
                        <label for="description" class="col-md-4 col-form-label ">Description</label>

                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row ">
                        <label for="url" class="col-md-4 col-form-label ">URL</label>

                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url">

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Profile image</label>
                        <input type="file" class="form" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="col-2 row pt-4">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
