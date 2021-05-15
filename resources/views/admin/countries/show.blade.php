@extends('layouts.admin')

@section('title', 'Countries')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/countries/'.$countries->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit author</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $countries->id }}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $countries->name }}</td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>{{ $countries->country }}</td>
                    </tr>
                    <tr>
                        <td>Lat</td>
                        <td>{{ $countries->latitude }}</td>
                    </tr>
                    <tr>
                        <td>Long</td>
                        <td>{{ $countries->longitude }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
