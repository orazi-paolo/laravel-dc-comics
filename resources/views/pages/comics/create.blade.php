@extends('layouts.app')

@include('partials.header')

@section('main-content')

<h1 class="text-center mb-4">Add a new comic</h1>
<form action="{{ route('comic.store') }}" method="POST" class="container">
    @csrf
    @if ($errors->any())
        <div class="alert alert-warning">
            <h4>These errors occurred</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" class="form-control" placeholder="Enter the title" value="{{ old('title') }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" class="form-control" placeholder="Enter the description" value="{{ old('description') }}">
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb:</label>
        <input type="text" name="thumb" class="form-control" placeholder="Enter URL the thumb" value="{{ old('thumb') }}"></input>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" name="price" class="form-control" placeholder="Enter the price" value="{{ old('price', '$') }}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series:</label>
        <input type="text" name="series" class="form-control" placeholder="Enter the series" value="{{ old('series') }}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date:</label>
        <input type="text" name="sale_date" class="form-control" placeholder="Enter the sale date example: 2000/01/01" value="{{ old('sale_date') }}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type:</label>
        <input type="text" name="type" class="form-control" placeholder="Enter the type" value="{{ old('type') }}">
    </div>

    <button type="submit" class="btn btn-primary w-100">Add comic</button>
</form>
@endsection
