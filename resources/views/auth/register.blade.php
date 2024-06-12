<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-blue-800">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/download.jpeg') }}" alt="Sky Pet Animal Hospital">
            </div>
            <div class="text-center text-2xl font-bold mb-6">Sky Pet Animal Hospital</div>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Username" required autofocus autocomplete="name" />
                </div>

                <div class="mb-4">
                    <x-input id="tax_no" class="block mt-1 w-full" type="text" name="tax_no" :value="old('tax_no')" placeholder="Business Tax Number" required />
                </div>

                <div class="mb-4">
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email Address" required autocomplete="username" />
                </div>

                <div class="mb-4">
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                </div>

                <div class="mb-4">
                    <x-input id="confirm_password" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-between mb-4">
                    <x-button class="ml-4">
                        {{ __('Sign Up') }}
                    </x-button>
                </div>

                <div class="text-center">
                    <span>Already have an account?</span><a href="{{ route('login') }}" class="text-blue-600">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
