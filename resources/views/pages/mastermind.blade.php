@extends('main')

@section('title')
    mastermind
@endsection

@section('projecten')
    active
@endsection

@section('taal')
    /en/projects/mastermind
@endsection

@section('body')
    <div id="terug">
        <a href="/projecten">Ga terug</a>
    </div>

    <div id="projectentekst">
        we moesten het bordspel mastermind na maken op een website. met behulp van arrays, sessions, foreach en if in php.
    </div>

    <div class="project-foto">

        <div class="projectenfoto">
            <img src="/images/mastermind.png" class="project-img">
        </div>

        <div class="projectenfoto-1">
            <img src="/images/play.png" class="project-img">
        </div>

        <div class="projectenfoto">
            <img src="/images/uitleg.png" class="project-img">
        </div>
    </div>

@endsection
