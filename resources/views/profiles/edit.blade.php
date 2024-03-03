@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="container mt-8">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-3xl mb-4">Edit Profile</h1>

                    <div class="mb-3">
                        <label for="image" class="form-label">Profile image</label>
                        <div class="relative mt-1">
                            <label for="image" class="cursor-pointer">
                                <img src="{{ $user->profile->ProfileImage() }}" alt="Current Profile Image" class="w-28 h-28 rounded-full object-cover hover:brightness-50 duration-100" onclick="document.getElementById('image').click()">
                            </label>
                            <input type="file" id="image" name="image" class="opacity-0 absolute cursor-pointer" style="visibility: hidden; position: absolute; width: 0; height: 0;">
                        </div>
                        @error('image')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-3 form-floating">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" placeholder="Title">
                        <label for="title" class="form-label">Title</label>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-floating">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" placeholder="Description">
                        <label for="description" class="form-label">Description</label>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-floating">
                        <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" placeholder="URL">
                        <label for="url" class="form-label">URL</label>
                        @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
