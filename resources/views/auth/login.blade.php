<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="flex mt-12">
                <img src="{{ asset('img/logo.png') }}" class="lg:w-24 md:w-20 w-14 h-full" alt="">
                <h1 class="font-bserif text-bblue lg:text-7xl md:text-6xl sm:text-5xl text-4xl font-bold">BeSmart</h1>
            </div>
            <p class="font-bsans text-bblack lg:text-xl md:text-lg sm:text-base text-sm text-center ">Rasakan pengalaman
                belajar <br> dimana saja dan kapan saja</p>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <small class="d-block text-center">
                Not registered? <a href="/register">Register Now!</a>
            </small>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    <a href="{{ route('home') }}"></a>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
