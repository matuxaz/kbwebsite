@extends('layouts.app')

@section('title', 'Create a post')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-4">
                    <div>
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                    </div>
                    <div>
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                    </div>

                    @if($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif

                    <div>
                        <x-jet-label for="description" value="{{ __('description') }}" />
                    </div>
                    <div>
                        <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" style="height:50px;" :value="old('description')" required autofocus autocomplete="description" />
                    </div>

                    @if($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif

                    <input type="file", class="form-control-file pt-5" style="position:absolute; " id="image" name="image">

                    @if($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="col-4"></div>
                <div class="col-4">
                    <button class="btn btn-primary" style="position: absolute; bottom:-95px;">Add new post</button>
                </div>
            </div>

        </form>
    </div>
@endsection
