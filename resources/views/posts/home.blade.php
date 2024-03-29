@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="flex-1 ml-24 px-16 py-12 space-y-12">
        @foreach($posts as $post)
            <div class="flex  flex-row ">
                <div class="flex row border-dark justify-content-center ">
                    <a href="p/{{$post->id}}" class="row justify-content-center h-75 ">
                        <img class="h-auto max-h-[750px] max-w-full object-cover hover:" src="/storage/{{$post->image}}" alt="Post picture">
                    </a>
                </div>
                <div class="row col-4 ">
                    <div>
                        <div class="flex align-items-center p-6 border-b-2">
                            <div>
                                <a href="/profile/{{$post->user->id}}">
                                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-16 h-16 bg-gray-100" alt="profile picture">
                                </a>
                            </div>
                            <div class="flex align-items-center">
                                <p class="font-extrabold text-lg px-3"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></p>
                                |
                                <div>
                                    <follow-button user-id="{{$post->user->id}}" :follows="{{ auth()->user() ? auth()->user()->following->contains($post->user->id) : false }}"></follow-button>
                                </div>
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
