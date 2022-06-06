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
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
            <div classe="card-body">
                <p class="card-date">10/58/5885</p>
                <h5 class="crd-title">{{ $event->title }} </h5>
            </div>
        </div>
        @endforeach
          @foreach($produts as $produts)
            {{ $produts->name }}
        @endforeach
      
    </div> 
</div>



@endsection