@extends("layouts.app")

@section("page-title", $comic['series'])

{{-- includi header --}}

@include('partials.header')

@section("main-content")
<main id="main" class="bg-black pt-4 pb-4">
    <section class="container">
        <h1 class="text-white mb-3">
            {{ $comic['series']}}
        </h1>
        <div class="row">
            <div class="col-6 mb-3">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}" class="img-fluid h-100 mb-3 cursor_pointer">
            </div>
            <div class="col-6">
                <ul class="list-unstyled">
                    @foreach ( $comic as $key => $value )
                    <li class="text-white mb-3">
                        <strong class="fs-3 text-danger">{{ strtoupper($key) }}:</strong> <br>
                        {{ $value }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
