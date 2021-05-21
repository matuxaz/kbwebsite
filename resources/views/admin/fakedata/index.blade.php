@extends('layouts.admin')

@section('title', 'Countries')

@section('content')
    <div class="card">
        <div class="card-header">
            Fake data from JSONplaceholder API
        </div>
        <div class="card-body">
<ul>
    @foreach($data as $item)
        <li><h3>{{ $item->title }}</h3><p>{{ $item->body }}</p></li>
    @endforeach
</ul>
        </div>
    </div>
@endsection
