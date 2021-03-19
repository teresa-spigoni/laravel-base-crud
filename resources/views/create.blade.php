@extends('layout')

@section('title')
    Create
@endsection

@section('content')

    <div id="create-root">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif


        <div class="create-form">

            <h1>Insert a new item</h1>

            <form class="needs-validation" action="{{route('beers.store')}}" method="post" novalidate>

                @csrf
                <input name="_method" type="hidden" value="POST">

                @method('POST')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand" required>
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="Type" required>
                </div>

                <div class="form-group">
                    <label for="alcohol_vol">Alcohol Content</label>
                    <input type="text" name="alcohol_vol" class="form-control" id="alcohol_vol" placeholder="Alcohol Content" required>
                </div>

                <div class="form-group">
                    <label for="fermentation">Fermentation</label>
                    <input type="text" name="fermentation" class="form-control" id="fermentation" placeholder="Fermentation" required>
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" class="form-control" id="color" placeholder="Color" required>
                </div>

                <div class="form-group">
                    <label for="taste">Taste</label>
                    <input type="text" name="taste" class="form-control" id="taste" placeholder="Taste" required>
                </div>

                <div class="form-group">
                    <label for="temperature">Temperature</label>
                    <input type="text" name="temperature" class="form-control" id="temperature" placeholder="Temperature" required>
                </div>

                <div class="form-group">
                    <label for="origin">Origin</label>
                    <input type="text" name="origin" class="form-control" id="origin" placeholder="Origin" required>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" id="year" placeholder="Year" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
                </div>

                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" name="image" class="form-control" id="image" placeholder="Image URL" required>
                </div>

                <input type="submit" value="Submit" class="btn btn-primary">

            </form>

        </div>

    </div>

@endsection
