@extends('main')
@section('title')
    Over mij
@endsection

@section('body')
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

<div id="overmijbox">

    <div id=overmijtekst>

        <h3>
        <p>Hallo ik ben Rick van Assen, 16 jaar en ik volg nu de opdleiding Software developer op Landstede Zwolle. In mij vrije tijd speel ik games en kijk ik films en series op Netflix.</p>
        </h3>

    </div>

    <div id="foto">
        <img src="/images/foto.jpg" alt="foto">

    </div>


    <div id="contact">
        <img src="/images/mail.png" alt="">
        <p>rassen0134@student.landstede.nl</p>
        <p>rickvanassen2@gmail.com</p>
    </div>

    <div id="socials">
        <a href="https://www.instagram.com/rick.0702/">
        <img src="/images/insta.png" alt="inst">
        <p>Instagram</p>
    </a>


    </div>

</div>

@endsection
