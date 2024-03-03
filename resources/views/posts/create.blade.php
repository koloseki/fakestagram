@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div class="container d-flex ">
        <form action="/p" enctype="multipart/form-data" method="post" class=" p-4 my-form w-50 mt-4">
            @csrf
            <div class="row">
                <div class="col-8 offset-2 ">
                    <h1 class="text-3xl mb-4">Add New Post</h1>

                    <div class="form-group mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Post Image</label>
                        <div class="relative mt-1">
                            <input type="file" id="image" name="image" class="opacity-0 absolute cursor-pointer">
                            <label for="image" class="cursor-pointer bg-white rounded-md border border-gray-300 p-2 inline-block">Choose file</label>
                        </div>
                        @error('image')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" placeholder="Post caption">
                        <label for="caption">Post Caption</label>

                        @error('caption')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary bg-blue-500">Add new post</button>
                </div>
            </div>
        </form>
    </div>
@endsection
