@vite('resources/scss/header.scss');

<header id="header" class="mb-3">
    <div class="bg-light-blue">
        <div class="container d-flex justify-content-end">
            <div class="text-white me-5 fs-6 fw-bold">
                DC POWER VISA
            </div>
            <div class="text-white fs-6 fw-bold">
                Additional DC SITES
            </div>
        </div>
    </div>
    <nav class="container bg-white d-flex align-items-center justify-content-between pt-3">
        <img src="{{ asset('img/favicon.ico')}}" alt="Logo" class="img-fluid">
        <div>
            <ul class="list-unstyled d-flex m-0">
                @foreach ( $pages as $singlePage )
                @if ($singlePage == 'COMICS')
                <li class="me-3 cursor-pointer">
                    <a href="{{ route('comic.index') }}" class="text-decoration-none">
                        {{ $singlePage }}
                    </a>
                </li>
                @else
                <li class="me-3 cursor-pointer">
                    <a href="#" class="text-decoration-none">
                        {{ $singlePage }}
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <div class="d-flex align-items-center">
                <i class="bi bi-search cursor-pointer"></i>
            </div>
        </form>

    </nav>
</header>
