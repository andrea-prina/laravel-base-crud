@extends('layouts.main')

@section('title', 'Comics List')

@section('main-content')

@if (session('delete'))
    <div class="alert alert-danger">{{ session('delete') }} has been deleted</div>
@elseif (session('new_entry'))
    <div class="alert alert-success">{{ session('new_entry') }} has been added</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Series</th>
            <th scope="col">Title</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
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
                <td>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete-form" data-comic-title="{{ $comic->title }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            
        @empty

            <tr>
                <td colspan="5">Empty</td>
            </tr>
            
        @endforelse
    </tbody>
</table>

@endsection

@section('footer-scripts')
    <script>

        const deleteFormButton = document.querySelectorAll('.delete-form');

        deleteFormButton.forEach(element => {
            element.addEventListener('submit', function(event){

                const comicTitle = this.getAttribute('data-comic-title');

                event.preventDefault();

                console.log(comicTitle);

                let checkDelete = prompt(`Type ${comicTitle} to DELETE`)

                if (checkDelete == comicTitle) {
                    this.submit();
                }
            })
        });

    </script>
@endsection