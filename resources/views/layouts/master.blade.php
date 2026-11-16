<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- assets con direttiva vite --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet"
    >

    {{-- icona --}}
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

            <a class="{{ request()->routeIs('characters') ? 'active' : '' }}"
                href="{{ route('characters') }}">CHARACTERS</a>
            <a class="{{ request()->routeIs('comics') ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
            <a class="{{ request()->routeIs('movies') ? 'active' : '' }}" href="{{ route('movies') }}">MOVIE</a>
            <a class="{{ request()->routeIs('tv') ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
            <a class="{{ request()->routeIs('games') ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
            <a class="{{ request()->routeIs('collectibles') ? 'active' : '' }}"
                href="{{ route('collectibles') }}">COLLECTIBLES</a>
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
                    DIGITAL COMICS
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise-image">
                    DC MERCHANDISE
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="subscriptions-image">
                    SUBSCRIPTION
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop-locator-image">
                    COMIC SHOP LOCATOR
                </a>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa-image">
                    DC POWER VISA
                </a>
            </div>

        </nav>

        <section id="site-map">

            <div class="container">

                <div id="links">
                    <ul>
                        <li>
                            <h3>DC COMICS</h3>
                        </li>
                        <li>
                            <a href="{{ route('characters') }}">Characters</a>
                        </li>
                        <li>
                            <a href="{{ route('comics') }}">Comics</a>
                        </li>
                        <li>
                            <a href="{{ route('movies') }}">Movie</a>
                        </li>
                        <li>
                            <a href="{{ route('tv') }}">TV</a>
                        </li>
                        <li>
                            <a href="{{ route('games') }}">Games</a>
                        </li>
                        <li>
                            <a href="{{ route('videos') }}">Videos</a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">News</a>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <h3>SHOP</h3>
                        </li>
                        <li>
                            <a href="#">Shop DC</a>
                        </li>
                        <li>
                            <a href="#">Shop DC Collectibles</a>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <h3>DC</h3>
                        </li>
                        <li>
                            <a href="#">Terms of service</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy (New)</a>
                        </li>
                        <li>
                            <a href="#">Ad Choices</a>
                        </li>
                        <li>
                            <a href="#">Advertising</a>
                        </li>
                        <li>
                            <a href="#">Jobs</a>
                        </li>
                        <li>
                            <a href="#">Subscriptions</a>
                        </li>
                        <li>
                            <a href="#">Talent Workshops</a>
                        </li>
                        <li>
                            <a href="#">CPSC Certificates</a>
                        </li>
                        <li>
                            <a href="#">Ratings</a>
                        </li>
                        <li>
                            <a href="#">Shop Help</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <h3>SITES</h3>
                        </li>
                        <li>
                            <a href="#">DC</a>
                        </li>
                        <li>
                            <a href="#">MAD Magazine</a>
                        </li>
                        <li>
                            <a href="#">DC Kids</a>
                        </li>
                        <li>
                            <a href="#">DC Universe</a>
                        </li>
                        <li>
                            <a href="#">DC Power Visa</a>
                        </li>
                    </ul>
                </div>

                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">

            </div>

        </section>

        <section id="page-end">

            <div class="container">

                <button>SIGN-UP NOW!</button>

                <nav>

                    <span>FOLLOW US</span>

                    <a href="#">
                        <img src="{{ VIte::asset('resources/img/footer-facebook.png') }}" alt="facebook-logo">
                    </a>

                    <a href="#">
                        <img src="{{ VIte::asset('resources/img/footer-twitter.png') }}" alt="twitter-logo">
                    </a>

                    <a href="#">
                        <img src="{{ VIte::asset('resources/img/footer-youtube.png') }}" alt="youtube-logo">
                    </a>

                    <a href="#">
                        <img src="{{ VIte::asset('resources/img/footer-pinterest.png') }}" alt="pinterest-logo">
                    </a>

                    <a href="#">
                        <img src="{{ VIte::asset('resources/img/footer-periscope.png') }}" alt="periscope-logo">
                    </a>

                </nav>

            </div>

        </section>

    </footer>

</body>

</html>
