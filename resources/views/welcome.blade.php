@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $event)
    <p>{{ $event->titulo }} -- {{ $event->teste }}</p>
@endforeach

@endsection