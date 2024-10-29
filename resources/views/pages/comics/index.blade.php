@extends('layouts.app')

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
                <a href="{{ route('comic', $id)}}" class="text-decoration-none">
                    <img src="{{ $singleComic['thumb']}}" alt="{{ $singleComic['title']}}"
                        class="img-fluid img-thumb mb-3 cursor_pointer">
                    <h6 class="text-white cursor_pointer">
                        {{ strtoupper($singleComic['series'])}}
                    </h6>
                </a>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center mb-3">
                <button role="button" class="bg-light-blue text-white pt-1 pb-1 pe-3 ps-3">
                    LOAD MORE
                </button>
            </div>
        </div>
    </section>
    <section class="quick-navigation bg-light-blue pt-5 pb-5 d-flex align-items-center justify-content-around">
        <div class="row container justify-content-between">
            {{-- @foreach ($quickNavigation as $singleQuickNavigation ) --}}
            <div class="col-2 d-flex cursor_pointer align-items-center">
                {{-- <img src="{{ $singleQuickNavigation['image'] }}" alt="Images quick navigation" --}}
                    class="img-quick-navigation me-1">
                {{-- <div class="fs-md text-white"> {{ $singleQuickNavigation['name'] }}</div> --}}
            </div>
            {{-- @endforeach --}}
        </div>
    </section>
</main>
@endsection
