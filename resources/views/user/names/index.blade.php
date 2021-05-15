@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    @foreach($names as $item)
        <p>{{ $item->id }} {{ $item->firstname }} {{ $item->lastname }}</p>
    @endforeach
@endsection
