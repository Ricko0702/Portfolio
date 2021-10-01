@extends('main')

@section('title')
    Projects
@endsection

@section('body')
<div id="navbar">

    <div id="logo">
    <img src="/images/logo.png" alt="picture logo">
    </div>

    <div id="home">
    <a href="/en/home"><h2>Home</h2></a>
    </div>

    <div id="projecten">
    <h2>Projects</h2>


   </div>

    <div id="overmij">
    <a href="/en/about"><h2>About me</h2></a>
    </div>

    <div id=taal>
    
    <a href="/">
    <img src="/images/nl.png" alt="">
    </a>

    </div>

</div>

<div id="projectboxen">
    <div id="projectenbox">
    <a href="/en/projects/this-website"><h2>This website</h2></a>
    </div>

    <div id="projectenbox">
    <h2>example</h2>
    </div>

    <div id="projectenbox">
        <h2>example</h2>



    </div>

    <div id="projectenbox">
    <h2>example</h2>
    </div>


</div>


@endsection