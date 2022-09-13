@extends('layouts.main')

@section('title', 'Comics List')

@section('main-content')

    <div class="d-flex w-75">
        <img src="{{ $comic->thumb }}" alt="">
        <div class="ms-3">
            <h3 class="fw-bolder">{{ $comic->title }}</h3>
            <h4>{{ $comic->series }}</h4>
            <p>{{ $comic->description }}</p>
            <p class="fw-bold">{{ $comic->price . ' €'}}</p>
        </div>
    </div>

@endsection