@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                @if(isset($post))
                    Edit exist post
                @else
                    Create new post manually
                @endif
            </h6>
        </div>
        <div class="card-body">

            @if(isset($post))
                {!! Form::model($post, ['url' => ['admin/users', $post->id], 'method' => 'patch']) !!}
            @else
                {!! Form::open(['url' => 'admin/users', 'class' => 'needs-validation']) !!}
            @endif

                <div class="form-group">
                    {!! Form::label('id', 'Id: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('user_id', 'User ID: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Image: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
@endsection
