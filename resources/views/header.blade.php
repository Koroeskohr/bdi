<header>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
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
                    @if (Auth::check())
                        <li>
                            <a href="{{ action('UsersController@show', [Auth::user()->id]  ) }}">
                                <p>{{ Auth::user()->name }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="/auth/logout">Logout</a>
                        </li>
                    @else
                        <a href="/login/facebook">Login with Facebook</a>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</header>