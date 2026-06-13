@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" class="bg-white shadow rounded p-6">
        @csrf
        @method('PUT')
        @include('products._form')

        <div class="flex justify-end gap-2">
            <a href="{{ route('products.index') }}" class="px-4 py-2 rounded border">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
@endsection