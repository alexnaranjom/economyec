<x-app-layout>
<div class="max-w-3xl mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">All Posts</h1>
        @auth
        <a href="{{ route('posts.create') }}"
             class="inline-block bg-yellow-400 text-blue-900 font-bold px-5 py-2 rounded shadow hover:bg-yellow-300 transition">
            + New Post
        </a>
        @endauth
    </div>

    @forelse ($posts as $post)
        <div class="mb-6 p-4 bg-white shadow rounded">
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
            <p class="text-sm text-gray-500">By {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}</p>
            <div class="mt-2 text-gray-700">{{ $post->body }}</div>

            @auth
            @if ($post->user_id === auth()->id())
            <div class="mt-2 flex space-x-2">
                <a href="{{ route('posts.edit', $post->id) }}"
                class="inline-block bg-yellow-400 text-blue-900 font-bold px-5 py-2 rounded shadow hover:bg-yellow-300 transition">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block bg-yellow-400 text-blue-900 font-bold px-5 py-2 rounded shadow hover:bg-yellow-300 transition">Delete</button>
                </form>
            </div>
            @endif
            @endauth    
        </div>
    @empty
        <p>No posts yet.</p>
    @endforelse
</div>
</x-app-layout>
