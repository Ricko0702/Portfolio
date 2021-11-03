@extends('pages en.english')

@section('title')
    about
@endsection

@section('taal')
/overmij
@endsection

@section('body')


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