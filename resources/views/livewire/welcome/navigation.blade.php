<nav class="flex  ">
        @auth<a href="{{ url('/dashboard') }}" >Dashboard</a>
        @else
        <a href="{{ route('login') }}" >Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </nav>
