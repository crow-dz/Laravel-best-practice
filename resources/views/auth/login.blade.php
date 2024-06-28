<x-layout>
    <x-slot:heading>
        Login Page
    </x-slot:heading>
    <form action="/login" method="post">
        @csrf
        @method('POST')
        <div class="space-y-12 flex justify-center">
            <div class="border-b border-gray-900/10 pb-12">

                <x-form-fields>
                    <x-form-label>Email</x-form-label>
                    <div class="mt-1">
                        <x-form-input id="email" name="email" type="email" autocomplete="email" value=""
                            placeholder="JoenI@example.com"></x-form-input>
                    </div>
                    <x-form-errors name="email"></x-form-errors>
                </x-form-fields>
                <x-form-fields>
                    <x-form-label>Password</x-form-label>
                    <div class="mt-1">
                        <x-form-input id="password" name="password" type="password" autocomplete="password"
                            value="" placeholder="Password"></x-form-input>
                    </div>
                    <x-form-errors name="password"></x-form-errors>
                </x-form-fields>

            </div>
        </div>
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>
</x-layout>
