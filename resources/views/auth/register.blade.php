<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <div class="flex mt-8">
                    <img src="{{ asset('img/logo.png') }}" class="lg:w-20 md:w-16 w-12 h-full" alt="">
                    <h1 class="font-bserif text-bblue lg:text-6xl md:text-4xl sm:text-2xl text-xl font-bold">BeSmart</h1>
                </div>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            {{-- grade --}}
            <div class="mt-3">
                {{-- <label for="grade_id" class="form-label">Grade</label> --}}
                <x-label for="grade_id" :value="__('grade_id')" />
                <select class="rounded-md shadow-sm border-gray-300" name="grade_id">
                    @foreach ($grades as $grade)
                    @if ( old('grade_id') == $grade->id)
                    <option value="{{ $grade->id }}" selected>{{ $grade->grade }}</option>
                    @else
                    <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" >
                    <a href="{{  route('login') }}">
                    {{ __('Register') }}</a>
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
