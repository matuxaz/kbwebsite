@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="card">
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->posts as $item)

                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td><img src="/storage/images/{{ $item->image }}" width="80" height="80"></td>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'url' => ['/p', $item->id], 'style' => 'display:inline']) !!}
                                {!! Form::button('<i class="fas fa-trash-alt"></i> Delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
