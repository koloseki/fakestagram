@extends('layouts.app')

@section('content')
<div class="container flex flex-grow h-screen justify-content-center items-center ">
        <div class="col-md-8 bg-red-400 flex flex-grow col justify-center">
            <div class="card bg-blue-50 w-25">

                <button class="font-instagram sm:relative  my-4 row-span-1 col-span-3  text-5xl font-thin  active:text-gray-500">Fakestagram</button>



                <div class="card-body flex col justify-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                                <label for="email" >{{ __('Email Address') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-floating mb-3">

                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                            <label for="password" >{{ __('Password') }}</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary bg-blue-500">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="border p-4 mt-3 flex justify-content-center">
                    <p>Don't have an account?</p> <a href="/register" class="text-blue-400 font-extrabold pl-1">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
