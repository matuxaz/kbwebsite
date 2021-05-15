@extends('layouts.admin')

@section('title', 'Names')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/names/'.$names->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit author</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $names->id }}</td>
                    </tr>
                    <tr>
                        <td>First name</td>
                        <td>{{ $names->firstname }}</td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td>{{ $names->lastname }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{ $names->age }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
