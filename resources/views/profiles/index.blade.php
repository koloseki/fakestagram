@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <main class="antialiased flex-1 justify-content-center  z-1">
        <div class="flex flex-row   justify-center gap-10 my-16  ">
            <div class="  align-content-center  ">
                <img  src="{{$user->profile->profileImage()}}" alt="Profile picture" class="w-40 h-40  rounded-full" />
            </div>
            <div>
                <div class="flex align-items-center">
                    <div class="py-2"><h1 class="text-2xl pr-6">{{$user -> username}}</h1></div>
                    @can('update',$user->profile)
                        <a role="button" href="/profile/{{$user->id}}/edit" class="btn-primary bg-gray-200 text-black px-2 py-1 font-extrabold rounded-md hover:bg-gray-300 active:bg-gray-100">
                            Edit Profile
                        </a>
                    @endcan
                    @cannot('update',$user->profile)
                        <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                    @endcannot
                </div>
                <div class="flex flex-row py-2 ">
                    <div class="pr-6"><strong class="pr-1">{{$postCount}}</strong>posts</div>
                    <div class="pr-6"><strong class="pr-1">{{$followersCount}}</strong>followers</div>
                    <div class="pr-6"><strong class="pr-1">{{$followingCount}}</strong>following</div>
                </div>
                <div class="py-2 bg">
                    <div>{{$user->profile->title}}</div>
                    <div>{{$user->profile->description}}</div>
                    <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="grid grid-cols-3 gap-1 w-4/5 pb-16">
                @foreach($user->posts as $post)
                    <a href="/p/{{$post->id}}">
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-100 hover:brightness-50 duration-100" alt="{{ $post->caption }}">
                    </a>
                @endforeach
            </div>
        </div>


    </main>

@endsection
