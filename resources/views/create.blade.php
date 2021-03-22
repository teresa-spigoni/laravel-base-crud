@extends('layout')

@section('title')
    Create
@endsection

@section('content')

    <div id="create-root">

        <div class="the-form">

            <h1>Insert a new item</h1>

            @include('form', ['edit' => false])

        </div>

    </div>

@endsection
