@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Buscar Evento </h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placaholder="Buscar seu eveno">

    </form>
</div>

<div id="events-container" classe="col-md-12">
    <h2>Proximos eventos </h2>
    <p> VEja os eventos aqui </p>
    <div id="cards-container" class="row">
        @foreach($produtos as $produto)
        <div class="card col-md-3">
            <img src="/img/event_placeholder.jpg" alt="{{ $produto->nome }}">
            <div classe="card-body">
                <p class="card-date">10/58/5885</p>
                <h5 class="crd-title">{{ $produto->nome }} </h5>
            </div>
        </div>
        @endforeach
        @foreach($events as $event)
            {{ $event->title}}
         @endforeach
    </div> 
</div>



@endsection