@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')

    <div class="d-flex row comics-show">
        <div class="col-2">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} - Cover">
        </div>
        <div class="col-8">
            <h3 class="fw-bolder">{{ $comic->title }}</h3>
            <h4>{{ $comic->series }}</h4>
            <p>{{ $comic->description }}</p>
            <p class="fw-bold">{{ $comic->price . ' €'}}</p>
        </div>
        <div class="col-1">
            <div class="d-flex gap-4">

                {{-- EDIT BUTTON --}}
                <a href="{{ route('comics.edit', $comic->id) }}" class="text-decoration-none"><i class="fa-solid fa-pen-to-square"></i></a>
                
                {{-- DELETE BUTTON --}}
                <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete-form" data-comic-title="{{ $comic->title }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="delete-btn text-danger"><i class="fa-solid fa-trash"></i></button>
                </form>

            </div>
        </div>
        <div class="col-12 mt-2">
            <a href="{{ route('comics.index') }}" class="text-decoration-none">← Go back to list</a>
        </div>
    </div>

@endsection

@section('footer-scripts')
    <script>

        const deleteFormButton = document.querySelector('.delete-form');

        deleteFormButton.addEventListener('submit', function(event){

                const comicTitle = this.getAttribute('data-comic-title');

                event.preventDefault();

                console.log(comicTitle);

                let checkDelete = prompt(`Type ${comicTitle} to DELETE`)

                if (checkDelete == comicTitle) {
                    this.submit();
                }
            });

    </script>
@endsection