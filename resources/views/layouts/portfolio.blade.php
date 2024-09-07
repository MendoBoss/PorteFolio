<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <div class="nav__content">
            <!-- <div class="logo"><a href="">Murilo</a></div> -->
             <img src="/images/Mendo2.png" id="logoNav" alt="logo" height="70px">
            <label for="check" class="checkbox">
                <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check" hidden>
            <ul>
                <li><a href="{{route('portfolioAccueil')}}">Accueil</a></li>
                <li><a href="">A propos</a></li>
                <li><a href="{{route('portfolioCv')}}">CV</a></li>
                <li><a href="{{route('portfolioPortfolio')}}">Portfolio</a></li>
                <li><a href="{{route('portfolioContact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section class="section">
        @yield('content')
    </section>
</body>
</html>