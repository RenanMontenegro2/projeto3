@extends('layouts.main')

@section('title','$event->title')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <img src="">
    </div>
    <div id="info-container" class="col-md-6 bg-danger p-5" style="margin-top:20%" style="max-width:10px">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon class="location-outline">{{$event->city}}</ion-icon></p>
    </div>
</div>
@endsection
