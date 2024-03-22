@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="container flex justify-center items-center h-screen">
        <div class="flex flex-col-reverse 2xl:flex-row 2xl:space-x-12">
            <div class="row mt-12 2xl:mt-0">
                <img class="w-auto max-h-[700px]" src="/storage/{{$post->image}}" alt="Post picture">
            </div>
        <div class=" 2xl:col-4 mt-24 2xl:mt-0">
            <div>
                <div class="flex align-items-center p-6 border-b-2">
                    <div>
                        <a href="/profile/{{$post->user->id}}">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-16 h-16 2xl:h-auto object-cover" alt="profile picture">                        </a>
                    </div>
                    <div class="flex align-items-center">
                        <p class="font-extrabold text-lg px-3"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></p>
                        |
                        <div>
                            @cannot('update',$post->user->profile)
                                <follow-button user-id="{{$post->user->id}}" :follows="{{ auth()->user() ? auth()->user()->following->contains($post->user->id) : false }}"></follow-button>
                            @endcannot
                        </div>
                    </div>
                </div>


                <p>{{$post->caption}}</p>
            </div>
        </div>
        </div>
    </div>

@endsection
