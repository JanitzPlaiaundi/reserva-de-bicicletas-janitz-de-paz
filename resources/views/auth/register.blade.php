<x-guest-layout>
    <div class="register-container">
        <div class="register-header">
            <h1>{{ __('Register') }}</h1>
        </div>

        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Name -->
            <div class="register-group">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="register-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="register-error" />
            </div>

            <!-- Email Address -->
            <div class="register-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="register-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="register-error" />
            </div>

            <!-- Password -->
            <div class="register-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="register-input"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="register-error" />
            </div>

            <!-- Confirm Password -->
            <div class="register-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="register-input"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="register-error" />
            </div>

            <div class="register-links">
                <a class="register-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <div class="register-actions">
                <x-primary-button class="register-button">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>