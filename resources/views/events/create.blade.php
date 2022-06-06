@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<h1>Crie um evento</h1>
@foreach($events as $event)
            {{ $event->title}}
         @endforeach
<form action="/events" method="POST">
@csrf
    Titulo
    <input class="form-control" type="text" name="title" id="title" placeholder="Titulo do Evento" aria-label="default input example">
    Descricao
    <input class="form-control" type="text" name="description" id="description" placeholder="Descrição do Evento" aria-label="default input example">
   
    <button type="submit"> enviar evento </button>
</form>


<form action="/produtos" method="POST">
@csrf
    NOME ENVIAR
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Titulo do Evento" aria-label="default input example">
    
   
    <button type="submit"> ENVIAR PARA TABELA NOME </button>
</form>

<form action="/events/1" method="POST">
@csrf
@method('DELETE')
   APGAR
    
   
    <button type="submit"> clique para apagar </button>
</form>
@endsection