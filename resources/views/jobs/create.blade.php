<x-layout>
    <x-slot:heading>
        Create Page
    </x-slot:heading>
    <form action="/jobs" method="post">
        @csrf
        @method('POST')
        <div class="space-y-12 flex justify-center">
            <div class="border-b border-gray-900/10 pb-12">
                <x-form-fields>
                    <x-form-label>Job Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="title" name="title" type="text" autocomplete="title" value=""
                            placeholder=" Title"></x-form-input>
                    </div>
                    <x-form-errors name="title"></x-form-errors>
                </x-form-fields>
                <x-form-fields>
                    <x-form-label>Job Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="salary" name="salary" type="text" autocomplete="salary" value=""
                            placeholder=" 50,000 $"></x-form-input>
                    </div>
                    <x-form-errors name="salary"></x-form-errors>
                </x-form-fields>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
