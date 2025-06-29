<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | EconomyEC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-900 text-white min-h-screen flex items-center justify-center">

    {{-- Top right auth links --}}
    <div class="absolute top-6 right-6">
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-white underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    {{-- Center content --}}
    <div class="text-center px-4">
        <h1 class="text-6xl font-extrabold mb-6 leading-tight">
            Explore. Learn. <br> Empower the Economy.
        </h1>
        <p class="text-xl text-gray-300 mb-8">
            Dive into curated articles that spark ideas and connect the dots.
        </p>

        {{-- Button to go to posts --}}
        <a href="{{ url('/posts') }}" class="inline-block px-8 py-3 bg-red-600 text-white text-lg font-semibold rounded-lg shadow hover:bg-red-700 transition duration-300">
            Browse Posts
        </a>
    </div>

</body>
</html>