@extends('layouts.main')

@section('title', 'Comics List')

@section('main-content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Series</th>
            <th scope="col">Title</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($comics as $comic)

            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->series }}</td>
                <td><a href="{{ route('comics.show', $comic->slug) }}" class="text-decoration-none">{{ $comic->title }}</a></td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->price }}</td>
                <td><a href="{{ route('comics.edit', $comic->id) }}" class="text-decoration-none"><i class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
            
        @empty

            <tr>
                <td colspan="5">Empty</td>
            </tr>
            
        @endforelse
    </tbody>
</table>

@endsection