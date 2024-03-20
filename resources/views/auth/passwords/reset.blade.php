@extends('layouts.app')

@section('content')
    <div class="container flex flex-grow h-screen justify-content-center items-center ">
        <div class="col-md-8  flex flex-col flex-grow  justify-center align-items-center">
            <div class="card sm:w-25 w-max bg-gray-50">

                <h1 class="sm:relative  my-4 row-span-1 col-span-3  text-3xl font-bold text-center  active:text-gray-500">{{ __('Reset Password') }}</h1>

                <div class="card-body flex col justify-center mx-8">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-floating mb-3 w-64">
                            <input id="email" type="email" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="email">
                            <label for="email">{{ __('Email Address') }}</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 w-64">
                            <input id="password" type="password" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                            <label for="password">{{ __('Password') }}</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 w-64">
                            <input id="password-confirm" type="password" class="form-control bg-gray-100 active:bg-gray-50 caret-gray-950 rounded-1" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="row mx-1">
                            <button type="submit" class="btn btn-primary bg-blue-500">
                                {{ __('Reset Password') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="mt-16 flex justify-content-center">
                <p class="text-gray-600">&copy; {{date('Y')}} <a href="https://github.com/koloseki">koloseki</a></p>
            </div>
        </div>
    </div>
@endsection
