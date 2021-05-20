@extends('layouts.app')

@section('title', 'User profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="/avatars/{{$user->profile_photo_path}}" style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;">
                <h1>{{ $user->name }}</h1>
                <div class="pt-5">Joined Virtual Shelf on {{ explode(" ", $user->created_at)[0] }}</div>
                <div class="pt-1">{{$user->name}} has {{ $user->posts->count() }} items on their shelf</div>
            </div>
            <div class="col-6"></div>

        </div>

        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/images/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>

    </div>


@endsection
