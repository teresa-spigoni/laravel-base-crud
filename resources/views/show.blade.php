<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>birre</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div id="show-root">
            <img class="show-beer-img" src="{{$beer->image}}" alt="">

            <div class="description">
                <h1>{{$beer->name}}</h1>
                <div><b>Tipo: </b>{{$beer->type}}</div>
                <div><b>Fermentazione: </b>{{$beer->fermentation}}</div>
                <div><b>Gradazione alcolica: </b>{{$beer->alcohol_vol}}</div>
                <div><b>Colore: </b>{{$beer->color}}</div>
                <div><b>Gusto: </b>{{$beer->taste}}</div>
                <div><b>Temperatura di servizio: </b>{{$beer->temperature}}</div>
                <div><b>Origine e anno: </b>{{$beer->origin}} {{$beer->year}}</div>
            </div>
        </div>

    </body>
</html>
