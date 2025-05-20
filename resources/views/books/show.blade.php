@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Book Details</h2>

    <!-- Display Book Details -->
    <div class="card">
        <div class="card-header">
            <h4>{{ $book->title }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="mt-3">
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
        </form>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to Books List</a>
    </div>
</div>
@endsection
