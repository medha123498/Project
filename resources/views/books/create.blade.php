@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Book</h2>

    <!-- Show validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some issues with your input:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Book creation form -->
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Book Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter book title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-control" placeholder="Enter author name" value="{{ old('author') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" class="form-control" placeholder="Enter ISBN" value="{{ old('isbn') }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="published_year">Published Year:</label>
            <input type="number" name="published_year" class="form-control" placeholder="Enter year" value="{{ old('published_year') }}">
        </div>

        <button type="submit" class="btn btn-success">Save Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
