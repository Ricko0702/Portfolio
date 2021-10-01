@extends('main')

@section('about')
    about
@endsection

@section('body')
   <div id="navbar">

    <div id="logo">
    <img src="/images/logo.png" alt="plaatje van logo">
    </div>

    <div id="home">
    <a href="/en/home"><h2>Home</h2></a>
    </div>

    <div class="container">
            <nav>
                <ul>
                    <li><a href="/en/projects"><h3>Projects</h3></a>
                        <ul>
                            <li><a href="/en/projects/this-website"><h4>This Website</h4></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>


   </div>

    <div id="overmij">
    <h2>About me</h2>
    </div>

    <div id=taal>
    
    <a href="/">
    <img src="/images/nl.png" alt="">
    </a>

    </div>

</div>

<div id="overmijbox">

    <div id=overmijtekst>

        <h3>
        Hello, I'm Rick van Assen, 16 years old, and I'm now following the Software Developer training at Landstede Zwolle. In my spare time, I play games and watch movies and series on Netflix.
        </h3>

    </div>

    <div id="foto">
        <img src="/images/foto.jpg" alt="foto">

    </div>


    <div id="contact">
        <img src="/images/mail.png" alt="">
        rassen0134@student.landstede.nl
        rickvanassen2@gmail.com
    </div>

    <div id="socials">
        <a href="https://www.instagram.com/rick.0702/">
        <img src="/images/insta.png" alt="inst">
        <p>Instagram</p>
        </a>

        <a href="https://www.linkedin.com/in/rick-van-assen/">
        <img src="/images/link.png" alt="link">
        <p>LinkedIn</p>
        </a>


    </div>

</div>

@endsection