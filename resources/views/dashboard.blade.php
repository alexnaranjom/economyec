<x-app-layout>
    <div class="max-w-3xl mx-auto py-8 px-4">
        <div class="mb-6 p-4 bg-white shadow rounded">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
            <p class="mb-4 text-gray-700">
                You are logged in as <span class="font-semibold">{{ Auth::user()->name }}</span>
                (<span class="text-gray-500">{{ Auth::user()->email }}</span>)
            </p>
            <a href="{{ route('posts.index') }}"
               class="inline-block bg-yellow-400 text-blue-900 font-bold px-5 py-2 rounded shadow hover:bg-yellow-300 transition">
                ← Back to All Posts
            </a>
        </div>
    </div>
</x-app-layout>