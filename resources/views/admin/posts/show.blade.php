@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/posts/'.$posts->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit author</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $posts->id }}</td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td>{{ $posts->user_id }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{ $posts->title }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{ $posts->description }}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="/storage/images/{{ $posts->image }}" width="100" height="100"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
