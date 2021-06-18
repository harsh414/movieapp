@extends('layouts.app')

@section('content')
<div class="container md:pt-56 md:ml-96">
    <div class="w-full max-w-xs">
        <div class="text-white mb-2 text-lg">Login</div>
        <form method="POST" action="{{ route('login') }}" class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="username">
                    Email
                </label>
                <div class="col-md-6">
                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-white text-sm font-bold mb-2">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    {{ __('Login') }}
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
{{--            <div class="form-group row mb-0">--}}
{{--                <div class="col-md-8 offset-md-4">--}}
{{--                    <button type="submit" class="btn btn-primary">--}}
{{--                        {{ __('Login') }}--}}
{{--                    </button>--}}

{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot Your Password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
    </div>
</div>
@endsection
