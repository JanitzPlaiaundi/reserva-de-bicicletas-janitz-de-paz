<header class="header__layout">
    <div class="logo__container">
        <a class="logo__link nav__links" alt="" href="{{ route('home') }}">
            <x-icons.application-logo />
            <h1>Biker's road</h1>
        </a>
        
    </div>
    <nav class="header__nav">
        <button id="theme-toggle" type="button" class="icon__button" title="Toggle theme" aria-label="Toggle theme">
            <svg id="theme-icon-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="currentColor">
                <path d="M12,21q-3.75,0-6.38-2.63T3,12T5.63,5.63T12,3q0.35,0 0.69,0.02q0.34,0.02 0.66,0.07q-1.03,0.73-1.64,1.89T11.1,7.5q0,2.25 1.57,3.82T16.5,12.9q1.38,0 2.53-0.61t1.88-1.64q0.05,0.33 0.07,0.66T21,12q0,3.75-2.63,6.38T12,21Zm0-2q2.2,0 3.95-1.21t2.55-3.16q-0.5,0.13-1,0.2t-1,0.08q-3.07,0-5.24-2.16Q9.1,10.58 9.1,7.5q0-0.5 0.08-1t0.2-1Q7.43,6.3 6.21,8.05T5,12q0,2.9 2.05,4.95T12,19Zm-0.25-6.75Z"/>
            </svg>
            <svg id="theme-icon-sun" style="display: none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="currentColor">
                <path d="M11,5V1h2V5H11Zm6.65,2.75L16.28,6.38l2.8-2.88l1.4,1.43L17.65,7.75ZM19,13V11h4v2H19ZM11,23V19h2v4H11ZM6.35,7.7L3.5,4.93l1.43-1.4L7.75,6.35L6.35,7.7Zm12.7,12.8l-2.77-2.88l1.35-1.35l2.85,2.75L19.05,20.5ZM1,13V11H5v2H1Zm3.93,7.5l-1.4-1.43l2.8-2.8l0.73,0.68l0.72,0.7L4.93,20.5Zm2.82-4.25Q6,14.5 6,12T7.75,7.75T12,6t4.25,1.75T18,12t-1.75,4.25T12,18T7.75,16.25Zm7.08-1.43Q16,13.65 16,12T14.83,9.17T12,8T9.18,9.17T8,12t1.18,2.82T12,16t2.83-1.18ZM12,12Z"/>
            </svg>
        </button>
        @auth

            <div class="header__pages">
                <a href="{{ route('home')}}" class="nav__links">{{ __('tid_home')}}</a>
                <a href="{{ route('bikes.index')}}" class="nav__links">{{ __('tid_bikes')}}</a>
                <a href="{{ route('bookings.index') }}" class="nav__links">{{ __('tid_my_bookings')}}</a>
            </div>
            
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

            <a href="{{ route('login') }}" class="icon__link" title="{{ __('tid_login') }}"><x-icons.user-icon /></a>
            <!--ToDo-->
            <a href="{{ route('register') }}" class="icon__link mobile__menu" title="{{ __('tid_menu') }}"><x-icons.menu-icon /></a>
        @endauth
    </nav>
</header>