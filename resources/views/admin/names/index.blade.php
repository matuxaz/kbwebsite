@extends('layouts.admin')

@section('title', 'Names')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/names/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add author</a>
        </div>
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
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($names as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>
                            <a href="{{ url('admin/names/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="{{ url('admin/names/'.$item->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> View</a>
                            {!! Form::open(['method'=>'DELETE', 'url' => ['admin/names', $item->id], 'style' => 'display:inline']) !!}
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
