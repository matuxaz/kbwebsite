@extends('layouts.app')

@section('title', 'Welcome to Virtual Shelf!')

@section('content')

<div class="row">

    <div class="col-2"></div>
    <div class="col-8">
        <form action="{{url('/search')}}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="userName" placeholder="Enter name of user to see their profile:">
                <input type="Submit" style="padding: 8px" class="pull-right btn btn-sm btn-primary">
            </div>

        </form>
    </div>
    <div class="col-2"></div>

</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        @if (\Session::has('error'))
            <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
            </div>
        @endif
    </div>
    <div class="col-4"></div>
</div>


@endsection
