<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>birre</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div id="root">
            <h1>Beers Table</h1>

            <table class="table beer-table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Type</th>
                    <th scope="col">Taste</th>
                    <th scope="col">Alcohol</th>
                    <th scope="col">Fermentation</th>
                    <th scope="col">Temperature</th>
                    <th scope="col">Origin</th>
                    <th scope="col">Year</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($beers as $beer)
                        <tr>
                            <th scope="row">{{$beer->id}}</th>
                            <td class="name-col"><b>{{$beer->name}}</b></td>
                            <td>{{$beer->brand}}</td>
                            <td>{{$beer->type}}</td>
                            <td class="taste-col">{{$beer->taste}}</td>
                            <td>{{$beer->alcohol_vol}}%</td>
                            <td>{{$beer->fermentation}}</td>
                            <td>{{$beer->temperature}}</td>
                            <td>{{$beer->origin}}</td>
                            <td>{{$beer->year}}</td>
                            <td class="img-col"><img class="index-beer-img" src="{{$beer->image}}" alt=""></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
