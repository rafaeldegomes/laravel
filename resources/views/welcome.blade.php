@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Buscar Evento </h1>
    <forsm action="">
        <input type="text" id="search" name="search" class="form-control" placaholder="Buscar seu eveno">

    </forsm>
</div>

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->teste }}</p>
@endforeach

@endsection