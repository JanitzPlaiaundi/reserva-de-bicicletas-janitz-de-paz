<header class="header__layout">
    <div class="logo__container">
        <a class="logo__link nav__links" alt="" href="{{ route('home') }}">
            <x-icons.application-logo />
            <h1>Biker's road</h1>
        </a>
        
    </div>
    <nav class="header__nav">
        @auth

            <div class="header__pages">
                <a href="{{ route('home')}}" class="nav__links">{{ __('tid_home')}}</a>
                <a href="{{ route('bikes.index')}}" class="nav__links">{{ __('tid_bikes')}}</a>
                <a href="{{ route('bookings.index') }}" class="nav__links">{{ __('tid_my_bookings')}}</a>
            </div>
            
            <button id="theme-toggle" type="button" class="icon__button" title="Toggle theme" aria-label="Toggle theme">
                <x-icons.moon-icon />
                <x-icons.sun-icon />
            </button>

            <a href="{{ route('profile.edit') }}" class="icon__link" title="{{ __('tid_profile') }}">
                <x-icons.user-icon />
            </a>
            <a href="{{ route('register') }}" class="icon__link mobile__menu" title="{{ __('tid_menu') }}"><x-icons.menu-icon /></a>
            
            <form method="POST" action="{{ route('logout') }}" class="form_logout">
                @csrf
                <button type="submit" class="icon__button" title="{{ __('tid_logout') }}">
                    <x-icons.logout-icon />
                </button>
            </form>

            
        @else
            <div class="header__pages">
                <a href="{{ route('home')}}" class="nav__links">{{ __('tid_home')}}</a>
                <a href="{{ route('bikes.index')}}" class="nav__links">{{ __('tid_bikes')}}</a>
                <a href="{{ route('bookings.index') }}" class="nav__links">{{ __('tid_my_bookings')}}</a>
            </div>

            <button id="theme-toggle" type="button" class="icon__button" title="Toggle theme" aria-label="Toggle theme">
                <x-icons.moon-icon />
                <x-icons.sun-icon />
            </button>
            <a href="{{ route('login') }}" class="icon__link" title="{{ __('tid_login') }}"><x-icons.user-icon /></a>
            <!--ToDo-->
            <a href="{{ route('register') }}" class="icon__link mobile__menu" title="{{ __('tid_menu') }}"><x-icons.menu-icon /></a>
        @endauth
    </nav>
</header>