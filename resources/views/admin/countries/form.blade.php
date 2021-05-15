@extends('layouts.admin')

@section('title', 'Countries')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                @if(isset($countries))
                    Edit existing country
                @else
                    Create new country
                @endif
            </h6>
        </div>
        <div class="card-body">

            {{-- Form::model ir Form::open metodai automatiškai prideda prie formos CSRF žetoną, todėl atskirai jo aprašyti nereikia --}}
            @if(isset($countries))
                {{-- Eamo įrašo redagavimo forma --}}
                {!! Form::model($countries, ['url' => ['admin/countries', $countries->id], 'method' => 'patch']) !!}
            @else
                {{-- Naujo įrašo įvedimo forma; metodo nereikia nurodyti, nes pagal nutylėjimą jis yra 'post' --}}
                {!! Form::open(['url' => 'admin/countries', 'class' => 'needs-validation']) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('country', 'short form: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('latitude', 'Latitude: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::number('latitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('longitude', 'Longitude: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::number('longitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
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
@endsection
