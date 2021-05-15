@extends('layouts.app')

@section('title', 'Profile settings')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                This is {{ Auth::user()->name }} <span class="caret"></span> profile settings
                <img src="/avatars/{{Auth::user()->profile_photo_path}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <form enctype="multipart/form-data" action="/settings" method="POST">
                    <label>Update Profile picture</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="Submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
            <div class="col-9">
            </div>
        </div>
    </div>
@endsection
