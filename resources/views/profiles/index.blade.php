@extends('layouts.app')

@section('content')
    <div id="app" class="antialiased flex col ">
        <nav class="fixed flex-initial  sm:grid grid-cols-7 grid-rows-12  sm:items-center min-h-screen border-1 border-r  z-1 sm:h-1">
            @if (Route::has('login'))
                <button class="font-instagram sm:relative  ml-5 mt-5 pb-4 row-span-1 col-span-4  text-2xl font-thin  active:text-gray-500">Fakestagram</button>


                <a role="button" href="{{'/home'}}" class="group col-span-7 flex hover:bg-gray-100 mx-4 my-2 py-3 rounded-md">
                    <img src="/svg/navbar/home.svg" alt="Home icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <p class="select-none">Home</p>
                </a>
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/search.svg" alt="Search icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Search</a>
                </button>
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/explore.svg" alt="Explore icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Explore</a>
                </button>
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/reels.svg" alt="Reels icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Reels</a>
                </button>
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/messages.svg" alt="Messages icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Messages</a>
                </button>
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/notifications.svg" alt="Notifications icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Notifications</a>
                </button>
                <a role="button" href="{{ url('/p/create') }}" class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md duration-200 ">
                    <img src="/svg/navbar/create.svg" alt="Create icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <p class="select-none">Create</p>
                </a>
                @if(Auth::check())
                    <a role="button" href="/profile/{{ Auth::id() }}" class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md ">
                        <img src="{{Auth::user()->profile->profileImage()}}" alt="Profile icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200 rounded-circle"/>
                        <p class="select-none">Profile</p>
                    </a>
                @else
                    <a role="button" href="{{ url('/login') }}" class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md ">
                        <img src="/svg/navbar/profile.svg" alt="Profile icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                        <p class="select-none">Profile</p>
                    </a>
                @endif

                <div class="row-span-8">

                </div>
                <a role="button" href="https://www.threads.net" class="group col-span-7 row-span-10 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/threads.svg" alt="Threads icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>

                    <p class="select-none">Threads</p>
                    <img src="/svg/navbar/threadsLink.svg" alt="Threads Link icon"  class="invisible flex-1 w-6 h-6 m-auto pl-32 group-hover:visible "/>

                </a>

                <more-button></more-button>

                <dialog id="MoreDialog" class=" -z-20 bg-transparent" autofocus>
                    <div class="flex flex-col text-center">
                        @auth
                            <a href="{{ route('logout') }}" class="w-96 px-6 py-3 font-extrabold  bg-gray-50 hover:bg-gray-100 rounded-3 ">Logout</a>
                        @else
                            <a href="{{ route('login') }}" class=" w-96 px-6 py-3 font-extrabold  bg-gray-50 hover:bg-gray-100 rounded-top-3 ">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-96 px-6 py-3 font-extrabold bg-gray-50 hover:bg-gray-100 rounded-bottom-3 ">Register</a>
                            @endif
                        @endauth
                    </div>
                </dialog>



            @endif

        </nav>

        <main class="flex-1 justify-content-center mx-64 z-1">
        <div class="flex flex-row   justify-center my-16 mx-64 ">
            <div class=" mr-32  align-content-center ">

                <img  src="{{$user->profile->profileImage()}}" alt="Profile picture" class="w-40 h-40 rounded-full" />

            </div>
            <div>
                <div class="flex align-items-center">
                    <div class="py-2"><h1 class="text-2xl pr-6">{{$user -> username}}</h1></div>
                    @can('update',$user->profile)
                        <a role="button" href="/profile/{{$user->id}}/edit" class="btn-primary bg-gray-200 text-black px-3 py-1 font-extrabold rounded-md hover:bg-gray-300 active:bg-gray-100">
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
                    <div>{{$user->profile->url}}</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 row justify-content-center px-32">
            @foreach($user->posts as $post)
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100 hover:brightness-50 duration-100" alt="{{$post->caption}}">
                </a>
            @endforeach


        </div>

    </main>
    </div>

@endsection
