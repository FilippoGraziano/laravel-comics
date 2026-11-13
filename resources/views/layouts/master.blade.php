<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- assets con direttiva vite --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Comics</title>
</head>

<body>

    <header>

        <a href="{{ route('comics') }}">
            <img src="{{ Vite::asset('resources/img/favicon.ico') }}" alt="DC logo">
        </a>

        <nav>
            <a href="{{ route('characters') }}">CHARACTERS</a>
            <a href="{{ route('comics') }}">COMICS</a>
            <a href="{{ route('movies') }}">MOVIE</a>
            <a href="{{ route('tv') }}">TV</a>
            <a href="{{ route('games') }}">GAMES</a>
            <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
            <a href="{{ route('videos') }}">VIDEOS</a>
            <a href="{{ route('fans') }}">FANS</a>
            <a href="{{ route('news') }}">NEWS</a>
            <a href="{{ route('shop') }}">SHOP</a>
        </nav>

    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>

        <nav id="footer-nav">

            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital-comics-image">
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise-image">
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions-image">
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop-locator-image">
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa-image">
            </a>

        </nav>

    </footer>

</body>

</html>
