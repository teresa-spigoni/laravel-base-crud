@extends('layout')

@section('title')
    Edit
@endsection

@section('content')

    <div id="edit-root">

        <div class="the-form">

            <h1>Edit the item</h1>

            @include('form', ['edit' => true])


        </div>

    </div>

@endsection
