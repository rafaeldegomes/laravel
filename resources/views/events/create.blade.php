@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<h1>Crie um evento</h1>

<form action="/events" method="POST">
@csrf
    Titulo
    <input class="form-control" type="text" name="title" id="title" placeholder="Titulo do Evento" aria-label="default input example">
    Descricao
    <input class="form-control" type="text" name="description" id="description" placeholder="Descrição do Evento" aria-label="default input example">
   
    <button type="submit">
</form>
@endsection