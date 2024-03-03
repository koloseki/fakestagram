@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="flex-1 ml-24 px-16 py-12">
        @foreach($posts as $post)
            <div class="flex  flex-row ">
                <div class="flex row border-dark justify-content-center ">
                    <a href="p/{{$post->id}}" class="row justify-content-center h-75 ">
                        <img class="h-100 w-auto object-cover hover:" src="/storage/{{$post->image}}" alt="Post picture">
                    </a>
                </div>
                <div class="row col-4 ">
                    <div>
                        <div class="flex align-items-center p-6 border-b-2">
                            <div>
                                <a href="/profile/{{$post->user->id}}">
                                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-16 h-16" alt="profile picture">
                                </a>
                            </div>
                            <div class="flex align-items-center">
                                <p class="font-extrabold text-lg px-3"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></p>
                                |
                                <a href="" class="pl-3 font-extrabold text-blue-400 hover:text-black">Follow</a>

{{--                                Follow Button testing--}}
{{--                                <div class="bg-amber-100">--}}
{{--                                    <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>--}}
{{--                                </div>--}}
                            </div>
                        </div>


                        <p class="px-6 py-3">
                            {{$post->caption}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div>
            {{$posts->links()}}
        </div>
    </div>
@endsection
