@extends('layouts.main')

@section('title','Criar Eveneto')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    @csrf
    <form action="/events" method="POST">
        <div class="from-group mt-5">
            <label for="title ">Evento</label>
            <input type="text" class="from-control" id="name" name="title" placeholder="nome do evento">
        </div>
        <div class="from-group">
            <label for="title mt-5">Cidade</label>
            <input type="text" class="from-control" id="name" name="title" placeholder="nome do evento">
        </div>
        <div class="from-group">
            <label for="title mt-5">Local</label>
            <input type="text" class="from-control" id="name" name="title" placeholder="nome do evento">
        </div>
        <div class="from-group">
            <label for="title mt-5">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="from-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
