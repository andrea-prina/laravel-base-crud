<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder" href="#">LARAVEL COMICS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('comics.index') || request()->routeIs('comics.show') ? 'active' : '' }}" href="{{ route('comics.index') }}">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('comics.create') ? 'active' : '' }}" href="{{ route('comics.create') }}">Add Comic</a>
                </li>
            </ul>
        </div>
    </div>
</nav>