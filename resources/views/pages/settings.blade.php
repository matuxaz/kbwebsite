@extends('layouts.app')

@section('title')
    This is {{ Auth::user()->name }} <span class="caret"></span> profile settings
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">

                <img src="/avatars/{{Auth::user()->profile_photo_path}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <form enctype="multipart/form-data" action="/settings" method="POST">
                    <label>Update Profile picture</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="col-sm-offset-3 col-sm-3">
                    <input type="Submit" class="pull-right btn btn-sm btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-8">
                <div class="card-body">

                        {!! Form::model($user, ['url' => ['settings', $user->id], 'method' => 'patch']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Edit name: ', ['class' => 'col-sm-3']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''), 'required' => 'required']) !!}
                            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Edit e-mail: ', ['class' => 'col-sm-3']) !!}
                        <div class="col-sm-6">
                            {!! Form::email('email', null, ['class' => 'form-control'.($errors->has('email') ? ' is-invalid' : ''), 'required' => 'required']) !!}
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-1">

                <a href="{{ url('settings/posts') }}"  class="btn btn-primary"> Manage posts</a>

            </div>
        </div>
    </div>
@endsection
