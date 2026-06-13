@extends('layouts.app')

@section('title', $customer->first_name . ' ' . $customer->last_name)

@section('content')
    <div class="bg-white shadow rounded p-6">
        <h1 class="text-2xl font-bold mb-4">{{ $customer->first_name }} {{ $customer->last_name }}</h1>

        <dl class="grid grid-cols-2 gap-2 mb-4">
            <dt class="font-medium">Email</dt>
            <dd>{{ $customer->email }}</dd>

            <dt class="font-medium">Phone</dt>
            <dd>{{ $customer->phone ?: '—' }}</dd>
        </dl>

        <a href="{{ route('customers.edit', $customer) }}" class="text-blue-600 hover:underline">Edit</a>
        ·
        <a href="{{ route('customers.index') }}" class="text-blue-600 hover:underline">Back to list</a>
    </div>
@endsection