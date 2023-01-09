<header>
    <nav>
        <ul class="d-flex">
            <li>
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">HOME</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">FILM</a>
            </li>
            <li>
                {{-- Posso richiamare il nome della rotta anche in questo modo {{Request::route()->getName() === ...clear}} --}}
                <a class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">CHI SIAMO</a>
            </li>
        </ul>
    </nav>
</header>
