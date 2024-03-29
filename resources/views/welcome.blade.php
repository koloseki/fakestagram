<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fakestagram</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body id="app" class="antialiased flex col">
        <nav class="fixed flex-initial  sm:grid grid-cols-7 grid-rows-12  sm:items-center min-h-screen border-1 border-r   sm:h-1 ">
        @if (Route::has('login'))
                <button class="font-instagram sm:relative  ml-5 mt-5 row-span-1 col-span-3  text-2xl font-thin  active:text-gray-500">Fakestagram</button>


                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 my-2 py-3 rounded-md">
                    <img src="/svg/navbar/home.svg" alt="Home icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Home</a>
                </button>
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
                <button class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md duration-200 ">
                    <img src="/svg/navbar/create.svg" alt="Create icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>Create</a>
                </button>
                @if(Auth::check())
                    <a role="button" href="/profile/{{ Auth::profile->id() }}" class="group col-span-7 flex hover:bg-gray-100 mx-4 py-3 rounded-md ">
                        <img src="/svg/navbar/profile.svg" alt="Profile icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
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

                <button onclick="" class="group mb-4 col-span-7 row-span-11 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
                    <img src="/svg/navbar/more.svg" alt="More icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
                    <a>More</a>
                </button>

                <dialog open id="MoreDialog" class="sm:absolute top-0  m-0 p-6 text-right z-10 row-span-2 col-span-6 bg-red-400 ">
                @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>

                    @else
                        <a href="{{ route('login') }}" class="ml-4 px-3 py-1 font-semibold text-white bg-blue-500 hover:bg-blue-600 rounded rounded-4 focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold focus:outline focus:outline-2 focus:outline-amber-700">Register</a>
                        @endif
                    @endauth
                </dialog>
            @endif

        </nav>
        <main class="flex-1 justify-content-center mx-64">
            <div class="row flex justify-center mt-16 mx-64 pr-44 ">
                <div class=" flex align-content-center m-16">

                    <img  src="https://pyxis.nymag.com/v1/imgs/031/f3a/3dc8d24958c4a3fd3a8487b49a7f71a45f-lofi-girl.1x.rsquare.w1400.png" alt="Profile picture" class="w-40 h-40 rounded-full" />
                </div>
                <div>
                    <div class="py-2"><h1 class="text-2xl">{{$user -> username}}</h1></div>
                    <div class="flex row py-2">
                        <div class="px-3"><strong class="pr-1">967</strong>posts</div>
                        <div class="px-3"><strong class="pr-1">1.1M</strong>followers</div>
                        <div class="px-3"><strong class="pr-1">416</strong>following</div>
                    </div>
                    <div class="py-2">
                        🎵 | Study - Chill - Sleep - Repeat<br>
                        🎹 | Label @lofirecords<br>
                        👕 | Merch @lofigirlshop<br>
                        🎨 | Studio @lofistudio<br>
                        <a class="font-bold" href=https://linkin.bio/lofigirl/">linkin.bio/lofigirl</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 row justify-content-center  mx-64 px-32">
                <div class="col-1 border m-1 ">
                    <img src="https://i.pinimg.com/564x/ce/99/d1/ce99d1349a01411f7bc5af09d531424d.jpg" alt="image" class="w-100 aspect-square">
                </div>
                <div class="col-2 border m-1">
                    <img src="https://i.pinimg.com/564x/ca/a8/1c/caa81c53f78d6abb428faf771f250741.jpg" alt="image" class="w-100">
                </div>
                <div class="col-3 border m-1">
                    <img src="https://i.pinimg.com/564x/21/21/83/21218355f168dcfb5ffd2789e9a41556.jpg" alt="image" class="w-100">
                </div>
                <div class="col-1 border m-1 ">
                    <img src="https://i.pinimg.com/564x/48/8c/3d/488c3d2ff60ce74dff843d578b2a615d.jpg" alt="image" class="w-100">
                </div>
                <div class="col-2 border m-1 ">
                    <img src="https://i.pinimg.com/564x/c9/78/6d/c9786daa2ca18e42f062504c7d7597e5.jpg" alt="image" class="w-100 ">
                </div>
                <div class="col-3 border m-1 ">
                    <img src="https://i.pinimg.com/564x/5c/dd/80/5cdd80f73140d31dbd4688a767dbc27b.jpg" alt="image" class="w-100">
                </div>

            </div>

        </main>
    </body>
</html>
