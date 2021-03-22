@extends('layout')

@section('title')
    Home
@endsection

@section('content')

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
                <th scope="col"></th>
                </tr>

            </thead>

            <tbody>
                @foreach ($beers as $beer)

                    <tr>
                        <th scope="row">{{$beer->id}}</th>
                        <td class="name-col">
                            <b>
                                <a href="{{route('beers.show', compact('beer'))}}">{{$beer->name}}</a>
                            </b>
                        </td>
                        <td>{{$beer->brand}}</td>
                        <td>{{$beer->type}}</td>
                        <td class="taste-col">{{$beer->taste}}</td>
                        <td>{{$beer->alcohol_vol}}%</td>
                        <td>{{$beer->fermentation}}</td>
                        <td>{{$beer->temperature}}</td>
                        <td>{{$beer->origin}}</td>
                        <td>{{$beer->year}}</td>
                        <td class="img-col"><img class="index-beer-img" src="{{$beer->image}}" alt=""></td>
                        <td class="buttons-col">
                            <button class="btn btn-success"><a href="{{route('beers.show', compact('beer'))}}"><i class="fas fa-eye"></i></a></button>

                            <button class="btn btn-success"><a href="{{route('beers.edit', compact('beer'))}}"><i class="far fa-edit"></i></a></button>

                            <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>

        <button class="btn btn-success add" ><a href="{{route('beers.create', compact('beer'))}}">Add a beer</a></button>

    </div>

@endsection
