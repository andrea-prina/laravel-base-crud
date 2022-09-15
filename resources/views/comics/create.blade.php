@extends('layouts.main')

@section('title', 'Add comic')

@section('main-content')

<form action="{{ route('comics.store') }}" method="post" class="row g-3">

    @csrf

    @include('includes.comics_create&edit')

</form>

@endsection