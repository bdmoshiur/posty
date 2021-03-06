@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }} " method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Your Name">
                    @error('name')
                    <div class="text-red-500 mr-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="username" name="username" type="text" value="{{  old('username') }}" placeholder="Your Username">
                    @error('username')
                    <div class="text-red-500 mr-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Your Email">
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
                    <label for="password_confirmation" class="sr-only">Password Again</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg " id="password_confirmation" name="password_confirmation" type="password"  placeholder="Repeat Your password">
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection