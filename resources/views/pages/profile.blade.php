@extends('layouts.app')

@section('title', 'User profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9"></div>
            <img src="/avatars/{{$user->profile_photo_path}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            {{ $user->name }} <span class="caret"></span>
        </div>
        <div>{{$user->name}} has {{ $user->posts->count() }} items on their shelf</div>

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
