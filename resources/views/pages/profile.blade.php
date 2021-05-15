@extends('layouts.app')

@section('title', 'User profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9"></div>
            <img src="/avatars/{{Auth::user()->profile_photo_path}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            {{ Auth::user()->name }} <span class="caret"></span>
        </div>
    </div>
@endsection
