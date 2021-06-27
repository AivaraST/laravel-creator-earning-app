<header class="header">
    <div class="header__container">
        <a href="{{ route('home') }}" class="header__logo"><img src="{{asset('images/logo.svg')}}"
                                                                alt="Logo header"></a>

        <div class="header__access">
            <a href="{{ route('login') }}" class="header__access-btn">
                Log In
            </a>
            <a href="{{ route('register') }}" class="header__access-btn header__access-btn--highlighted">
                Sign Up
            </a>
        </div>
    </div>
</header>
