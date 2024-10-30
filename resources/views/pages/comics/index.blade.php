@extends('layouts.app')

@section("additional-cdn",)
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
@endsection

{{-- includi header --}}
@include('partials.header')

{{-- includo jumbotron --}}
@include('partials.jumbotron')

@section("main-content")
<main id="main" class="bg-black">
    <section class="container">
        <div>
            <button class="bg-light-blue text-white pt-2 pb-2 pe-3 ps-3 fw-bold top-plus-50 fs-4">
                CURRENT SERIES
            </button>
        </div>
        <div class="row">
            @foreach ($comics as $id => $singleComic )
            <div class="col-2 mb-3">
                <div>
                    <a href="{{ route('comic.show', $singleComic['id']  )}}" class="text-decoration-none">
                        <img src="{{ $singleComic['thumb']}}" alt="{{ $singleComic['title']}}"
                            class="img-fluid img-thumb mb-3 cursor_pointer">
                        <h6 class="text-white cursor_pointer">
                            {{ strtoupper($singleComic['series'])}}
                        </h6>
                    </a>
                    <form action="{{ route('comic.delete', $singleComic['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2 delete-button" data-comic-name="{{ $singleComic['title'] }}">Delete</button>
                    </form>
                    <a href="{{route('comic.edit', $singleComic['id'])}}" class="btn btn-warning mt-2">Edit</a>
                </div>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center mb-3">
                <button role="button" class="bg-light-blue text-white pt-1 pb-1 pe-3 ps-3 me-3">
                    LOAD MORE
                </button>
                <a href="{{ route('comic.create') }}">
                    <button role="button" class="bg-light-blue text-white pt-1 pb-1 pe-3 ps-3 me-3">
                        ADD NEW COMIC
                    </button>
                </a>
            </div>
        </div>
    </section>
    <section class="quick-navigation bg-light-blue pt-5 pb-5 d-flex align-items-center justify-content-around">
        <div class="row container justify-content-between">
            @foreach ($quickNavigation as $singleQuickNavigation )
            <div class="col-2 d-flex cursor_pointer align-items-center">
                <img src="{{ $singleQuickNavigation['image'] }}" alt="Images quick navigation"
                    class="img-quick-navigation me-1">
                <div class="fs-md text-white"> {{ $singleQuickNavigation['name'] }}</div>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection

@vite('resources/js/delete-modal.js')
