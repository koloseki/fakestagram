@extends('layouts.app')

@section('content')
    <div class="container flex flex-grow h-screen justify-content-center items-center ">
        <div class="col-md-8  flex flex-col flex-grow  justify-center align-items-center">
            <div class="card sm:w-25 w-max bg-gray-50">

                <div class="flex justify-center items-center mt-4">
                    <img src="/svg/lock.svg" alt="Lock icon"  class="w-16 h-16 mx-3 "/>
                </div>

                <h1 class="sm:relative  mt-2 row-span-1 col-span-3  text-xl text-center font-bold ">Trouble logging  in?</h1>

                <p class="sm:relative mt-1 mb-4 row-span-1 col-span-3  text-center px-12">
                    Enter your email and we'll send you <br>
                    a link to get back into your account.
                </p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <form method="POST" action="{{ route('password.email') }}" class="flex flex-col items-center justify-center">
                    @csrf

                    <div class="form-floating mb-3 w-75">
                        <input id="email" type="email" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        <label for="email" >{{ __('Email Address') }}</label>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600 mb-1 w-75">
                        {{ __('Send Reset Link') }}
                    </button>
                </form>

                <div class="inline-flex items-center justify-center w-full">
                    <hr class="w-64 h-1 my-8 bg-gray-800 border-0 rounded">
                    <div class="absolute px-3 -translate-x-1/2 bg-gray-50 left-1/2">
                        <p class="font-extrabold text-gray-500">OR</p>
                    </div>
                </div>

                <a href="{{ route('register') }}" class="text-center font-extrabold hover:text-gray-400 mb-32">
                    Create new account
                </a>

                <a href="{{ route('login') }}" class="text-center font-extrabold hover:text-gray-500 bg-gray-200 py-2 border-t-2 border-x border-b border-gray-300">
                    Back to login
                </a>
            </div>
        </div>
    </div>
@endsection
