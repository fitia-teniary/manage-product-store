<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow mb-6">
        <div class="max-w-4xl mx-auto px-4 py-3 flex gap-6">
            <a href="{{ route('products.index') }}" class="font-semibold text-gray-700 hover:text-gray-900">Products</a>
            <a href="{{ route('customers.index') }}" class="font-semibold text-gray-700 hover:text-gray-900">Customers</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4">
        @if (session('success'))
            <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-2">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>