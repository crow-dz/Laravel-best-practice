<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job->title }}
    </x-slot:heading>
    <form action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="space-y-12 flex justify-center">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                    <div class="mt-2">
                        <input id="title" name="title" type="text" autocomplete="title" value="{{ $job->title }}"
                            placeholder=" Title"
                            class="w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                    </div>
                    @error('title')
                        <div class="mt-1">
                            <p class="text-red-500"> {{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="sm:col-span-4 mt-6 ">
                    <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Job Salary</label>
                    <div class="mt-2 sm:col-span-4">
                        <input id="salary" name="salary" type="text" autocomplete="salary" value="{{ $job->salary }}"
                            placeholder=" 50,000 $"
                            class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                    </div>
                    @error('salary')
                        <div class="mt-1">
                            <p class="text-red-500"> {{ $message }}</p>
                        </div>
                    @enderror
                </div>

            </div>
        </div>
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>

</x-layout>
