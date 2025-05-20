@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Book</h2>

    <!-- Show validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some problems with your input:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit form -->
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Important for PUT/PATCH requests -->

        <div class="form-group mb-3">
            <label for="title">Book Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-contr
