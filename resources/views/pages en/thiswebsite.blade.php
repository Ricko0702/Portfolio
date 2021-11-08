@extends('pages en.english')

@section('title')
    this website
@endsection

@section('projecten')
active
@endsection

@section('taal')
/projecten/deze-website
@endsection

@section('body')

<div id="terug">
    <a href="/en/projects">Go back</a>

</div>

<div id="dezewebsitetekst">
This is my first project. I have used Laravel, HTML and CSS. I have used flexbox in CSS. I also used PHP on some pages.
On this website you can find all my projects.

<div class="dezewebsitevoorbeeld">
    this is an example of PHP:
    </div>
    
    <div class="tijd">
    this is the date today: <?php echo date("j F Y"); ?>.
    </div>

    <div class="php">
        <li>
            <a href="/tafel">times tables</a>
    
        </li>
        
    </div>

</div>


@endsection