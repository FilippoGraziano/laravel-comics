<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- assets con direttiva vite --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">

    <title>DC Comics</title>
</head>

<body>

    <header class="container">

        <a href="{{ route('comics') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
        </a>

        <nav>

            {{-- request() è un helper di laravel che restituisce un'istanza che rappresenta la richiesta HTTP dell'utente e all'interno di questo istanza c'è routeIs(), un metodo che permette di controllare quale rotta è attiva --}}

            <a class="{{ request()->routeIs('characters') ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a>
            <a class="{{ request()->routeIs('comics') ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
            <a class="{{ request()->routeIs('movies') ? 'active' : '' }}" href="{{ route('movies') }}">MOVIE</a>
            <a class="{{ request()->routeIs('tv') ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
            <a class="{{ request()->routeIs('games') ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
            <a class="{{ request()->routeIs('collectibles') ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
            <a class="{{ request()->routeIs('videos') ? 'active' : '' }}" href="{{ route('videos') }}">VIDEOS</a>
            <a class="{{ request()->routeIs('fans') ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a>
            <a class="{{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
            <a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>

        <nav id="footer-nav">

            <div class="container">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="digital-comics-image">
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise-image">
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="subscriptions-image">
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop-locator-image">
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa-image">
                </a>
            </div>

        </nav>

    </footer>

</body>

</html>
