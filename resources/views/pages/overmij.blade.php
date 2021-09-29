@extends('main')
@section('title')
    Over mij
@endsection

<div id="navbar">

    <div id="logo">
    <img src="/images/logo.png" alt="plaatje van logo">
    </div>

    <div id="home">
    <a href="/"><h2>Home</h2></a>
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
    <h2>Over mij</h2>
    </div>
</div>

<div id=overmijtekst>

    <h3>
    Mijn naam is Rick van Assen
    </h3>
</div>


