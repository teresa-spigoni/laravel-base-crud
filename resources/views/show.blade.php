@extends('layout')

@section('title')
    Show
@endsection

@section('content')

    <div id="show-root">

        <img class="show-beer-img" src="{{$beer->image}}" alt="">

        <div class="description">
            <h1>{{$beer->name}}</h1>
            <div><b>Tipo: </b>{{$beer->type}}</div>
            <div><b>Fermentazione: </b>{{$beer->fermentation}}</div>
            <div><b>Gradazione alcolica: </b>{{$beer->alcohol_vol}}% vol</div>
            <div><b>Colore: </b>{{$beer->color}}</div>
            <div class="taste"><b>Gusto: </b>{{$beer->taste}}</div>
            <div><b>Temperatura di servizio: </b>{{$beer->temperature}}</div>
            <div><b>Origine e anno: </b>{{$beer->origin}} {{$beer->year}}</div>
            <button class="btn btn-danger"><a href="{{route('beers.edit', compact('beer'))}}">Edit <i class="far fa-edit"></i></a></button>
        </div>

        <div class="beer">
            B <br>
            E <br>
            E <br>
            R
        </div>

    </div>

@endsection
