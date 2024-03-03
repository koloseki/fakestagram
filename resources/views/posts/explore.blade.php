@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="flex-1 mx-12 px-32">
        <h1 class="text-center py-12 font-extrabold text-4xl">Explore</h1>
        <div class="grid grid-cols-3 gap-4 justify-items-center">
            @foreach($posts as $post)
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100 hover:brightness-50 duration-100" alt="{{$post->caption}}">
                </a>
            @endforeach
        </div>

        <div class="text-center mt-4 flex justify-content-center pt-8 pb-16">
                {{$posts->links()}}
        </div>
    </div>
@endsection
