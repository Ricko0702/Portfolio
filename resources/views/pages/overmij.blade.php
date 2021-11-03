@extends('main')
@section('title')
    Over mij
@endsection

@section('taal')
/en/about
@endsection

@section('body')

<div id="overmijbox">

    <div id=overmijtekst>

        <h3>
        Hallo ik ben Rick van Assen, 16 jaar en ik volg nu de opleiding Software developer op Landstede Zwolle. In mijn vrije tijd speel ik games en kijk ik films en series op Netflix.
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