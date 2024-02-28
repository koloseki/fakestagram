@extends('layouts.app')

@section('content')
<div class="container flex flex-grow h-screen justify-content-center items-center ">
        <div class="col-md-8  flex flex-col flex-grow  justify-center align-items-center">
            <div class="card sm:w-25 w-max bg-gray-50">

                <button class="font-instagram sm:relative  my-4 row-span-1 col-span-3  text-5xl font-thin  active:text-gray-500">Fakestagram</button>


                <div class="card-body flex col justify-center mx-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                                <label for="email"  >{{ __('Email Address') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-floating mb-3">

                            <input id="password" type="password" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                            <label for="password" >{{ __('Password') }}</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mx-1">
                            <button type="submit" class="btn btn-primary bg-blue-500 ">
                                {{ __('Login') }}
                            </button>
                        </div>


                        <div class="inline-flex items-center justify-center w-full">
                            <hr class="w-64 h-1 my-8 bg-gray-800 border-0 rounded">
                            <div class="absolute px-3 -translate-x-1/2 bg-gray-50 left-1/2">
                                <p class="font-extrabold text-gray-500">OR</p>
                            </div>
                        </div>

                        <div class="row mt-2 mx-1">
                            <a href="/home" role="button" class="btn btn-secondary  ">
                                {{ __('Continue without') }}
                            </a>
                        </div>

                        <div class="row mb-3 mt-2">
                            @if (Route::has('password.request'))
                                <a class="btn text-xs" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>


                    </form>
                </div>
            </div>

            <div class="card py-4 px-14 mt-3 flex justify-content-center bg-gray-50 flex-row ">
                <p>Don't have an account?</p> <a href="/register" class="text-blue-400 font-extrabold pl-1">Sign up</a>
            </div>

            <div class="mt-16 flex justify-content-center">
                <p class="text-gray-600">&copy; {{date('Y')}} <a href="https://github.com/koloseki">koloseki</a></p>
            </div>
        </div>
</div>
@endsection
