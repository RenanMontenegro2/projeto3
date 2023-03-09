@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<h1 >Algum titulo</h1>
@if(10<5)
    <p>A condição é verdadeira</p>
@endif
//retornaram
<p>{{$nome}}</p>
@if($nome=="Pedro")
    <p>O nome é Pedro</p>
@elseif($nome=="Matheus")
    <p>O nome é {{$nome}} e ele tem {{$idade}} e trabalha como {{$profissao}}</p>
@else
    <p>O nome não é Pedro</p>
@endif
@for($i=0;$i<count($arr);$i++)
    <p>{{$arr[$i]}}</p>
@endfor

@php
    $name ="João";
    echo $name;
@endphp

@endsection
