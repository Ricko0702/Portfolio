@extends('main')

@section('title')
    Deze website
@endsection

@section('projecten')
active
@endsection
@section('taal')
/en/projects/this-website
@endsection

@section('body')


<div id="terug">
    <a href="/projecten">Ga terug</a>

</div>

<div id="dezewebsitetekst">
Dit is mijn eerste project. Ik heb gebruik gemaakt van Laravel, HTML en CSS. Ik heb in CSS gebruik gemaakt van flexbox. Ik heb op sommige pagina's ook gebruik gemaakt van PHP.
Op deze website kun je al mijn projecten vinden.
    
<div class="dezewebsitevoorbeeld">
    dit dit zijn een paar voorbeelden van PHP:
    </div>
    
    <div class="tijd">
        dit is de datum vandaag is <?php echo date("j F Y"); ?>.
    </div>

    <div class="php">
        <li>
            <a href="/tafel">tafel generator</a>
    
        </li>
        <li>
            <a href="/btw">btw rekenmachine</a>
        </li>
    </div>
</div>



@endsection
