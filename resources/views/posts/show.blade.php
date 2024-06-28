<x-layout>
    <x-slot:heading>
        {{ $post[0]->title }}
    </x-slot:heading>



    <div class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post[0]->title }}</h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post[0]->body }}</p>
    </div>

    <div class="mt-4 flex justify-end">
        <form action="{{ route('blogs.destroy', $post[0]->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            <a href="/blogs/edit/{{ $post[0]->id }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
        </form>
    </div>
</x-layout>
