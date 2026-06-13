@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            New Product
        </a>
    </div>

    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="text-left border-b">
                <th class="p-3">Name</th>
                <th class="p-3">Price</th>
                <th class="p-3">Stock</th>
                <th class="p-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="border-b">
                    <td class="p-3">
                        <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td class="p-3">{{ number_format($product->price, 2) }}</td>
                    <td class="p-3">{{ $product->stock_quantity }}</td>
                    <td class="p-3 text-right space-x-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-gray-600 hover:underline">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline"
                              onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
@endsection