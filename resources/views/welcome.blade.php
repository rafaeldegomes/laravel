@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }} -- {{ $event->teste }}</p>
@endforeach

@endsection