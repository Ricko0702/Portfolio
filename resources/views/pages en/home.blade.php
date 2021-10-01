@extends('main')

@section('title')
    Home
@endsection

@section('body')

<div id="navbar">

<div id="logo">
<img src="/images/logo.png" alt="Image of logo">
</div>

<div id="home">
<h2>Home</h2>
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
<a href="/en/about"><h2>About me</h2></a>
</div>



<div id=taal>
    
    <a href="/">
    <img src="/images/nl.png" alt="">
    </a>

</div>

</div>


<div class="typen">
<div class="typing-demo1">
    Welcome to my portfolio-website.
</div>
</div>


@endsection