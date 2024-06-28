<x-layout>
    <x-slot:heading>
        Create Page
    </x-slot:heading>
    <form action="{{ route('blogs.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Blog Title</label>
                    <div class="mt-2">
                        <input id="title" name="title" type="text" autocomplete="title" value=""
                            placeholder=" Title"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="3" placeholder=" Body"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/blogs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
