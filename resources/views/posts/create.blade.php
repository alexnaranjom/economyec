<x-app-layout>
<div class="max-w-2xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create New Post</h1>

    <div class="bg-white p-6 rounded shadow">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Body</label>
                <textarea name="body" rows="5" required
                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
            </div>

            <div>
                <button type="submit"
                        class="bg-yellow-400 text-blue-900 font-semibold px-5 py-2 rounded hover:bg-yellow-300 transition">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>