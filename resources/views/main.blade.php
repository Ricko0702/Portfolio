<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio website Rick - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
        <nav>
                <div class="logo">

                    <a href="/">
                        <img src="/images/logo.png" alt="logo"></div>
                    </a>


                <div class="@yield('home')home">
                        <a href="/"><h3>Home</h3></a>
                </div>
                <div class="@yield('projecten')dropmenu">
                    <div class="drop">
                        <a href="/projecten"><h3>Projecten</h3></a>

                    </div>

                </div>
                <div class="@yield('overmij')overmij">
                    <a href="/overmij"><h3>Overmij</h3></a>
                </div>

                <div class=taal>
                    <div class="dropdown">
                        <button><h3>Taal/Language</h3></button>
                        <div class="dropdown-content">
                            <a href="/">NL</a>
                            <a href="/en/home">EN</a>
                        </div>
                    </div>
                </div>
        </nav>
    </header>

@yield('body')




</body>
<footer>
    <div id="copyright">
        Created by Rick van Assen. © 2021
    </div>
</footer>
</html>
