@extends('main')

@section('title')
    Home
@endsection

@section('body')
<div id="navbar">

    <div id="logo">
    <img src="/images/logo.png" alt="plaatje van logo">
    </div>

    <div id="home">
    <h2>Home</h2>
    </div>

    <div class="container">
            <nav>
                <ul>
                    <li><a href="/projecten"><h3>Projecten</h3></a>
                        <ul>
                            <li><a href="/projecten/deze-website"><h4>Deze Website</h4></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>


   </div>

    <div id="overmij">
    <a href="/overmij"><h2>Over mij</h2></a>
    </div>

    <div id=taal>
    
    <a href="/en/home">
    <img src="/images/uk.png" alt="">
    </a>

    </div>

</div>


<div class="typen">
    <div class="typing-demo">
        Welkom op mijn portfolio-website.
    </div>
</div>
@endsection
