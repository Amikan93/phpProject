    <?php
    @extends('layouts.app')

    @section('content')
        <h1>Products in Category: {{ $category->name }}</h1>

        <ul>
            @foreach($products as $product)
                <li>{{ $product->product_name }} - {{ $product->price }}</li>
            @endforeach
        </ul>
    @endsection

