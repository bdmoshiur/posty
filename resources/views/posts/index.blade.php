@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body')border-red-500 @enderror" id="body" name="body" rows="4" cols="30" placeholder="Posts Somethings"></textarea>
                    @error('body')
                    <div class="text-red-500 mr-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Post</button>
                </div>
            </form>
            
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There are no Post!</p>
            @endif
        </div>
    </div>
@endsection