@extends('layouts.app')

@section('title', 'Create a post')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="form-group row">

                        <div>
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        </div>

                        @if($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif

                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Post image</label>
                        <input type="file", class="form-control-file" id="image" name="image">

                        @if($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row pt-3"></div>
                    <button class="btn btn-primary">Add new post</button>

                    <div>
                        <x-jet-label for="description" value="{{ __('description') }}" />
                        <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                    </div>

                    @if($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </form>
    </div>
@endsection
