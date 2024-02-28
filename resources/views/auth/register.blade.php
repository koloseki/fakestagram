@extends('layouts.app')

@section('content')
<div class="container flex flex-grow h-screen justify-content-center items-center ">
        <div class="col-md-8  flex flex-col flex-grow  justify-center align-items-center">
            <div class="card sm:w-25 w-max bg-gray-50">

                <button class="font-instagram sm:relative  my-4 row-span-1 col-span-3  text-5xl font-thin  active:text-gray-500">Fakestagram</button>


                <div class="card-body flex col justify-center mx-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3 w-64">
                            <input id="name" type="text" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="name">
                            <label for="name">{{ __('Name') }}</label>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="email">
                            <label for="email" >{{ __('Email Address') }}</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input id="username" type="text" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" placeholder="username">
                            <label for="username" >Username</label>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-floating mb-3 ">
                            <input id="password" type="password" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="password">
                            <label for="password" >{{ __('Password') }}</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1" name="password_confirmation" value="" required  autocomplete="new-password" placeholder="confirm password">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        </div>


                        <div class="row mx-1">
                            <button type="submit" class="btn btn-primary bg-blue-500">
                                {{ __('Register') }}
                            </button>
                        </div>


                    </form>
                </div>
            </div>

            <div class="card py-4 px-24 mt-3 flex justify-content-center bg-gray-50 flex-row ">
                <p>Have an account?</p> <a href="/login" class="text-blue-400 font-extrabold pl-1">Log in</a>
            </div>

            <div class="mt-16 flex justify-content-center">
                <p class="text-gray-600">&copy; {{date('Y')}} <a href="https://github.com/koloseki">koloseki</a></p>
            </div>
        </div>
</div>
@endsection
