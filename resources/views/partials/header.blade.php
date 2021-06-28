<header class="header">
    <div class="header__container">
        <a href="{{ route('home') }}" class="header__logo"><img src="{{asset('images/logo.svg')}}"
                                                                alt="Logo header"></a>

        <div class="header__access">
            @guest()
                <a href="{{ route('login') }}" class="header__access-btn">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="header__access-btn header__access-btn--highlighted">
                    Sign Up
                </a>
            @endguest
            @auth()
                <nav class="header__auth-nav">
                    <ul class="header__auth-list">
                        <li class="header__auth-list-item"><a href="{{ route('user.edit') }}"
                                                              class="header__auth-link">My Profile</a></li>
                        <li class="header__auth-list-item"><a href="{{ route('articles.index') }}"
                                                              class="header__auth-link">Articles</a></li>
                        <li class="header__auth-list-item"><a href="#" class="header__auth-link">Subscribers</a></li>
                    </ul>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="header__auth-logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout
                        </button>
                    </form>
                </nav>
            @endauth()
        </div>
    </div>
</header>
