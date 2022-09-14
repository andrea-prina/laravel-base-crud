@extends('layouts.main')

@section('title', 'Admin Home')

@section('main-content')

    <div class="row">
        <div class="col-4 text-center">
            <h1 class="fw-bolder">{{ $dashboardInfo['totalComics'] }}</h1>
            <h3>TOTAL COMICS</h3>
        </div>
        <div class="col-4 text-center">
            <h1 class="fw-bolder">{{ $dashboardInfo['newComics'] }}</h1>
            <h3>NEW COMICS</h3>
        </div>
        <div class="col-4 text-center">
            <h1 class="fw-bolder">{{ $dashboardInfo['totalComicsValue'] }} €</h1>
            <h3>TOTAL VALUE</h3>
        </div>
    </div>

@endsection