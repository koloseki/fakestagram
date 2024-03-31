@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="container mx-auto flex flex-col justify-center items-center h-screen space-y-8">
        @foreach ($results as $user)
            <a role="button" href="/profile/{{$user->id}}" class="flex bg-gray-100 justify-center items-center w-full md:w-1/2 lg:w-1/3 xl:w-1/4 2xl:w-1/5 p-4 rounded-lg shadow-md space-x-4">
                <img src="{{$user->profile->profileImage()}}" class="rounded-full w-16 h-16 2xl:h-auto object-cover" alt="profile picture">
                <div class="flex flex-col justify-center">
                    <p class="font-extrabold">{{ $user->username }}</p>
                    <p class="text-gray-500">{{ $user->profile->title}}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
