@extends('layouts.main')

@section('title', 'Add comic')

@section('main-content')

@if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

    <form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
        @method('PUT')
        @csrf

        @include('includes.comics_create&edit')

    </form>

@endsection