<nav class="header__layout">
    <div class="logo__container">
        <a href="" class="icon__link" alt="" href="{{ route('home') }}">
            <x-icons.application-logo />
        </a>
        
        <h1>Biker's road</h1>
    </div>
    <nav class="header__nav">
        @auth
            <a href="{{ route('profile.edit') }}" class="icon__link"><x-icons.user-icon /></a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="icon__button">
                    <x-icons.logout-icon />
                </button>
            </form>
            
        @else
            <a href="{{ route('login') }}" class="icon__link"><x-icons.user-icon /></a>
            <a href="{{ route('register') }}" class="icon__link"><x-icons.menu-icon /></a>
        @endauth
    </nav>
</nav>