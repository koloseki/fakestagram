@extends('layouts.app')

@include('partials.navbar')

@section('content')
    <div class="container flex justify-center items-center h-screen">
        <div class="mt-8 max-w-md mx-auto">
            <form action="/search" method="GET" role="search">
                <div class="flex items-center border-b border-b-2 border-blue-400 py-2">
                    <div class="rounded-lg p-2">
                        <input id="search" class="bg-gray-50 appearance-none border-none w-full text-black text-xl py-2 px-4 leading-tight focus:outline-none active:outline-none" type="search" name="q" placeholder="Username">
                    </div>
                    <button class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
