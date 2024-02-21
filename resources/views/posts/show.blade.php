@extends('layouts.app')

@section('content')
    <div class="container flex flex-row ">
        <div class="row">
            <img src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-4">
            <div>
                <h3 class="">{{$post->user->username}}</h3>

                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>

@endsection
