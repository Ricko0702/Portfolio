<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website Rick - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>

<header>
        <nav>

                <div class="logo">
                    <a href="/en/home">
                        <img src="/images/logo.png" alt="logo"></div>
                    </a>


                <div class="@yield('home')home">
                        <a href="/en/home"><h3>Home</h3></a>
                </div>
                <div class="@yield('projecten')dropmenu">
                    <div class="drop">
                        <a href="/en/projects"><h3>Projects</h3></a>
                    </div>

                </div>
                <div class="@yield('overmij')overmij">
                    <a href="/en/about"><h3>About</h3></a>
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



<footer>
    <div id="copyright">
        Created by Rick van Assen. © 2021
    </div>
</footer>
</body>
</html>
