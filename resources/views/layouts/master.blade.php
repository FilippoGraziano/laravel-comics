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
    <div class="container">

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

            <hr>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <hr>
            This is the footer!
        </footer>

    </div>
</body>
</html>