<x-layout>
    <x-slot:heading>
        Blogs
    </x-slot:heading>

<div class="mb-2 flex justify-end">
    <a href="/blogs/create"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</a>
</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6  md:p-6 w-full p-4">

        @foreach ($posts as $post)
            <a href="/blogs/{{ $post->id }}">
                <div
                    class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $post->title }}</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->body }}</p>
                    <p class="mb-3 font-normal text-white">By - {{ $post->user->first_name}} {{$post->user->last_name}}</p>

                </div>
            </a>
        @endforeach

    </div>
</x-layout>
