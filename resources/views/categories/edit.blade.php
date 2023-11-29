    <?php

    @extends('layouts.app')

    @section('content')
        <h1>Edit Category: {{ $category->name }}</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" required>
            <button type="submit">Update Category</button>
        </form>
    @endsection
