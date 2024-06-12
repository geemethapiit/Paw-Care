<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-blue-800">
        <div class="bg-white p-8 rounded-lg shadow-lg w-3/4 md:w-1/2 lg:w-1/3">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/download.jpeg') }}" alt="Sky Pet Animal Hospital">
            </div>
            <div class="text-center text-2xl font-bold mb-6">Sky Pet Animal Hospital</div>
            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Username" required autofocus autocomplete="username" />
                </div>

                <div class="mb-4">
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                </div>

                <div class="block mb-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>

                <div class="text-center">
                    <span>Don't You have an account? </span><a href="{{ route('register') }}" class="text-blue-600">Register</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
