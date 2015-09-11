<header>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">BDI</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ action('PromotionsController@index') }}">Promotions</a></li>
                    <li><a href="{{ action('UsersController@index') }}">Elèves</a></li>
                    <li><a href="{{ action('ArticlesController@index') }}">Articles</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        @if (Auth::check())
                            <p>Bienvenue, {{ Auth::user()->name }}</p>
                            <a href="/auth/logout">Logout</a>
                        @else
                            <a href="/login/facebook">Login with Facebook</a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>