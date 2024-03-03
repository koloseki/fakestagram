@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="flex-1 mx-12 px-32 pt-6 ">
        <div class="flex-1 mx-auto grid grid-cols-3 gap-1 justify-items-center w-75">
            @foreach($posts as $post)
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100 hover:brightness-75 duration-100" alt="{{$post->caption}}">
                </a>
            @endforeach
        </div>


        <div class="text-center mt-4 flex justify-content-center pt-8 pb-16">
                {{$posts->links()}}
        </div>
    </div>
@endsection
