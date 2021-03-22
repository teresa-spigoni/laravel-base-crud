@php
    if(isset($edit) && !empty($edit)) {
        $method = 'PUT';
        $url = route('beers.update', compact('beer'));
    } else {
        $method = 'POST';
        $url = route('beers.store');
    }
@endphp

<form class="needs-validation" action="{{$url}}" method="post" novalidate>

    @csrf
    <input name="_method" type="hidden" value="POST">

    @method($method)

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Name" required value="{{isset($beer) ? $beer->name : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" name="brand" class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" id="brand" placeholder="Brand" required value="{{isset($beer) ? $beer->brand : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('brand') }}
        </div>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" id="type" placeholder="Type" required value="{{isset($beer) ? $beer->type : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('type') }}
        </div>
    </div>

    <div class="form-group">
        <label for="alcohol_vol">Alcohol Content</label>
        <input type="text" name="alcohol_vol" class="form-control {{ $errors->has('alcohol_vol') ? 'is-invalid' : '' }}" id="alcohol_vol" placeholder="Alcohol Content" required value="{{isset($beer) ? $beer->alcohol_vol : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('alcohol_vol') }}
        </div>
    </div>

    <div class="form-group">
        <label for="fermentation">Fermentation</label>
        <input type="text" name="fermentation" class="form-control {{ $errors->has('fermentation') ? 'is-invalid' : '' }}" id="fermentation" placeholder="Fermentation" required value="{{isset($beer) ? $beer->fermentation : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('fermentation') }}
        </div>
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color" class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" id="color" placeholder="Color" required value="{{isset($beer) ? $beer->color : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('color') }}
        </div>
    </div>

    <div class="form-group">
        <label for="taste">Taste</label>
        <input type="text" name="taste" class="form-control {{ $errors->has('taste') ? 'is-invalid' : '' }}" id="taste" placeholder="Taste" required value="{{isset($beer) ? $beer->taste : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('taste') }}
        </div>
    </div>

    <div class="form-group">
        <label for="temperature">Temperature</label>
        <input type="text" name="temperature" class="form-control {{ $errors->has('temperature') ? 'is-invalid' : '' }}" id="temperature" placeholder="Temperature" required value="{{isset($beer) ? $beer->temperature : ''}}">
    </div>

    <div class="form-group">
        <label for="origin">Origin</label>
        <input type="text" name="origin" class="form-control {{ $errors->has('origin') ? 'is-invalid' : '' }}" id="origin" placeholder="Origin" required value="{{isset($beer) ? $beer->origin : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('origin') }}
        </div>
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <input type="text" name="year" class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" id="year" placeholder="Year" required value="{{isset($beer) ? $beer->year : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('year') }}
        </div>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" placeholder="Price" required value="{{isset($beer) ? $beer->price : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('price') }}
        </div>
    </div>

    <div class="form-group">
        <label for="image">Image URL</label>
        <input type="text" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image" placeholder="Image URL" required value="{{isset($beer) ? $beer->image : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('image') }}
        </div>
    </div>

    <input type="submit" value="Submit" class="btn btn-success">

</form>
