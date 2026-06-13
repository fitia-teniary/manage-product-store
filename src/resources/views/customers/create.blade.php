@extends('layouts.app')

@section('title', 'New Customer')

@section('content')
    <h1 class="text-2xl font-bold mb-4">New Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST" class="bg-white shadow rounded p-6">
        @csrf
        @include('customers._form')

        <div class="flex justify-end gap-2">
            <a href="{{ route('customers.index') }}" class="px-4 py-2 rounded border">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
        </div>
    </form>
@endsection