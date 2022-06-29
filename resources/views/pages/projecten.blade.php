@extends('main')

@section('title')
Projecten
@endsection

@section('projecten')
active
@endsection

@section('taal')
/en/projects
@endsection

@section('body')

<div id="projectboxen">

{{--    <div id="projectenbox">--}}
{{--        <a href="/projecten/pecunia"><h2>Pecunia</h2></a>--}}
{{--    </div>--}}



    <div id="projectenbox">
        <a href="/projecten/mastermind"><h2>Mastermind</h2></a>
    </div>

    <div id="projectenbox">
        <a href="/projecten/deze-website"><h2>Deze website</h2></a>
    </div>

</div>

@endsection
