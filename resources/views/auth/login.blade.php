@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
            <div class="bg-red-500 p-4  rounded-lg mb-6 text-white text-center">
                {{  Session('status') }}
            </div>
            @endif
            <form action="{{ route('login') }} " method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="email" name="email" type="email" placeholder="Your Email">
                    @error('email')
                    <div class="text-red-500 mr-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="password" name="password" type="password" placeholder="Choose a password">
                    @error('password')
                    <div class="text-red-500 mr-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="flex items-center">
                        <input class="mr-2" id="remember" name="remember" type="checkbox">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection