@extends('layouts.app')

@section('title')
{{$post->title}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/images/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4">
                <h3>{{$post->user->name}} says about this thing:</h3>
                <p>{{$post->description}}</p>
            </div>
        </div>
    </div>
@endsection
