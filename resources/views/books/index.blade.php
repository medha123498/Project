@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Books List</h2>

    <!-- Success message after a successful operation (e.g., create, update, delete) -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Link to create a new book -->
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>

    <!-- Table displaying all books -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Published Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <!-- Delete Button (Form to delete book) -->
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No books available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
