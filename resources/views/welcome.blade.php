@extends('layouts.main')

@section('title','HDC Events')

@section('content')

   ;
    <div id="search-container" class="col-md-12 pt-5" style=" background-color: #F2A340">

    <h1 class="mt-5" >Busque um evento</h1>
    <form action="" style="max-width:40%">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias </p>
    <div class="cards-container row">
        @foreach($events as $event)
        <div class="card col-md-3 m-5 " >
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X-participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
