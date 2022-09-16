@extends('layouts.main')

@section('title', 'Add comic')

@section('main-content')

@if ($errors->any())

@endif

    <form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
        @method('PUT')
        @csrf

        @include('includes.comics_form')

    </form>

@endsection