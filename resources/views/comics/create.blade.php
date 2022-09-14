@extends('layouts.main')

@section('title', 'Add comic')

@section('main-content')

<form action="{{ route('comics.store') }}" method="post" class="row g-3">

    @csrf

    <div class="col-6">
        <label for="input-series" class="form-label">Series</label>
        <input type="text" class="form-control" id="input-series" name="comic-series">
    </div>

    <div class="col-6">
        <label for="input-title" class="form-label">Title</label>
        <input type="text" class="form-control" id="input-title" name="comic-title">
    </div>

    <div class="col-12">
        <label for="input-description" class="form-label">Description</label>
        <textarea name="comic-description" id="input-description" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="col-12">
        <label for="input-image-url" class="form-label">Image Thumb URL</label>
        <input type="text" class="form-control" id="input-image-url" name="comic-img-url">
    </div>

    <div class="col-3">
        <label for="input-type" class="form-label">Type</label>
        <select id="input-type" class="form-select" name="comic-type">
            <option selected>Choose...</option>
            <option>comic book</option>
            <option>graphic novel</option>
        </select>
    </div>

    <div class="col-3">
        <label for="input-sale-date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="input-sale-date" name="comic-sale-date">
    </div>

    <div class="col-3">
        <label for="input-price" class="form-label">Price</label>
        <input type="text" class="form-control" id="input-price" name="comic-price">
    </div>

    <div class="col-3 d-flex align-items-end">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection