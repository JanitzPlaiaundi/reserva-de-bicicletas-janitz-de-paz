<nav class="header__layout">
    <div class="logo__container">
        <a class="icon__link" alt="" href="{{ route('home') }}">
            <x-icons.application-logo />
        </a>
        
        <h1>Biker's road</h1>
    </div>
    <nav class="header__nav">
        @auth
            <a href="{{ route('profile.edit') }}" class="icon__link" title="{{ __('tid_profile') }}">
                <x-icons.user-icon />
            </a>
            <a href="{{ route('register') }}" class="icon__link" title="{{ __('tid_menu') }}"><x-icons.menu-icon /></a>
            <form method="POST" action="{{ route('logout') }}" class="form_logout">
                @csrf
                <button type="submit" class="icon__button" title="{{ __('tid_logout') }}">
                    <x-icons.logout-icon />
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="icon__link" title="{{ __('tid_login') }}"><x-icons.user-icon /></a>
            <a href="{{ route('register') }}" class="icon__link" title="{{ __('tid_menu') }}"><x-icons.menu-icon /></a>
        @endauth
    </nav>
</nav>