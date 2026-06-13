@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="bg-white shadow rounded p-6">
        <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
        <p class="text-gray-600 mb-4">{{ $product->description ?: 'No description.' }}</p>

        <dl class="grid grid-cols-2 gap-2 mb-4">
            <dt class="font-medium">Price</dt>
            <dd>{{ number_format($product->price, 2) }}</dd>

            <dt class="font-medium">Stock Quantity</dt>
            <dd>{{ $product->stock_quantity }}</dd>
        </dl>

        <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:underline">Edit</a>
        ·
        <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Back to list</a>
    </div>
@endsection