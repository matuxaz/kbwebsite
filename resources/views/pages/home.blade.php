@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <form action="{{url('/search')}}" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="userName" placeholder="Enter user name">
            <input type="Submit" class="pull-right btn btn-sm btn-primary">
        </div>
    </form>

@endsection
