<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @if (!app()->runningUnitTests())
    @vite(['resources/js/app.js', 'resources/css/app.css'])
@endif
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">

    <div class="min-h-screen flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-5xl font-bold mb-6">Welcome to {{ config('app.name', 'Revo Store') }}</h1>
        <p class="text-lg mb-10">Manage your products easily with our simple Laravel app.</p>

        <div class="flex gap-4 flex-wrap justify-center">
            <!-- View products -->
            <a href="{{ route('product.index') }}"
                class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                View Products
            </a>

            <!-- Add product -->
            <a href="{{ route('product.create') }}"
                class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                Add Product
            </a>
        </div>

        <!-- Optional: small footer -->
        <footer class="mt-20 text-gray-500 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name', 'Revominds') }}. All rights reserved.
        </footer>
    </div>

</body>

</html>
