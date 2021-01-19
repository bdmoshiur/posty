@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h2 class="tex-2xl font-medium mb-1">{{ $user->name }}</h2>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <p>{{ $user->name }} Does't Have Any Post!</p>
                @endif
            </div>
        </div>
    </div>
@endsection