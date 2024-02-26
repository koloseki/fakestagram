@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="container flex flex-row ">
            <div class="row">
                <img class="max-h-screen" src="/storage/{{$post->image}}" alt="Post picture">
            </div>
            <div class="col-4 pl-16">
                <div>
                    <div class="flex align-items-center p-6 border-b-2">
                        <div class="pr-6">
                            <a href="/profile/{{$post->user->id}}">
                                <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-16 h-16" alt="profile picture">
                            </a>
                        </div>
                        <div class="flex align-items-center">
                            <p class="font-extrabold text-lg px-3"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></p>
                            |
                            <a href="" class="pl-3 font-extrabold text-blue-400 hover:text-black">Follow</a>
                        </div>
                    </div>


                    <p>{{$post->caption}}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div>
        {{$posts->links()}}
    </div>
</div>
@endsection
