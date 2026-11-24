<x-guest-layout>
    <div class="login-container">
        <div class="login-header">
            <h1>{{ __('Log In') }}</h1>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="login-status" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="login-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="login-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="login-error" />
            </div>

            <!-- Password -->
            <div class="login-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="login-input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="login-error" />
            </div>

            <!-- Remember Me -->
            <div class="login-remember">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="login-links">
                @if (Route::has('password.request'))
                    <a class="login-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="login-link" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                @endif
            </div>

            <div class="login-actions">
                <x-primary-button class="login-button">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>