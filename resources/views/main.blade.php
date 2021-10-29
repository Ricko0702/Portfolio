<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio website Rick - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<header>
        <nav>
                <div class="logo"> <img src="/images/logo.png" alt="logo"></div>


                <div class="home">
                        <a href="/"><h3>home</h3></a>
                </div>
                <div class="dropmenu">
                    <div class="drop">
                        <a href="/projecten"><h3>projecten</h3></a>  
                        <ul class="dropdown"> 
                            <li>
                                <a href="/projecten/deze-website">Deze website</a>
                            </li>
                        </ul>
                    </div>
                  
                </div>
                <div class="overmij">
                    <a href="/overmij"><h3>overmij</h3></a>
                </div>

                <div id=taal>

                <a href="/en/home">
                <img src="/images/uk.png" alt="">
                </a>
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
