@extends('layouts.app')

@section('title')
{{$post->title}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <img src="/storage/images/{{ $post->image }}" style="border: 3px solid #555;" class="w-100">
            </div>
            <div class="col-3">
                <h3>{{$post->user->name}} says about this thing:</h3>
                <p>{{$post->description}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pt-4">
                    @comments(['model' => $post])
                </div>
            </div>
        </div>
    </div>
@endsection
