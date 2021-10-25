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
            <div class="logo"> <img src="/images/logo.png" alt="logo"></div>
                

                <div class="home">
                        <a href="/en/home"><h3>home</h3></a>
                </div>
                <div class="dropmenu">
                    <div class="drop">
                        <a href="/en/projects"><h3>projects</h3></a>
                    </div>
                    <ul>
                        <li>
                            <a href="/en/projects/this-website">this website</a>
                        </li>
                    </ul>
                </div>
                <div class="overmij">
                    <a href="/en/about"><h3>about</h3></a>
                </div>

                <div id=taal>
        
                <a href="/">
                <img src="/images/nl.png" alt="">
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