<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900"> Back</a>
    <div class="border border-gray-900/10 rounded m-4 p-5">
        <h3 class="text-blue-500 font-bold  ">{{ $job->employer->name }}</h3>
        <p class=""> {{ $job['title'] }} :Pays {{ $job['salary'] }} per Year</p>
    </div>
    <div class="flex justify-end space-x-6">
        <button form="from-delete" type="submit"
            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
          hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>

        @can('edit', $job)
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
        @endcan


    </div>
    <form action="/jobs/{{ $job->id }}" method="post" id="from-delete" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
