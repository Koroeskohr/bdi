<header>
    <div class="panel">
        @if (Auth::check())
            <p>Bienvenue, {{ Auth::user()->name }}</p>
            <a href="/auth/logout">Logout</a>
        @else
            <a href="/login/facebook">Login with Facebook</a>
        @endif
    </div>
    <a href="/"><h1>BDI</h1></a>
    <nav>
        <ul>
            <li><a href="{{ action('PromotionsController@index') }}">Promotions</a></li>
            <li><a href="{{ action('UsersController@index') }}">Elèves</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Events</a></li>
        </ul>
    </nav>


</header>
<hr>