@extends('main')

@section('body')
    <p>form content</p>
    <form method="POST">
        @csrf
        Voornaam:<input type="text" name="voornaam">
        Password:<input type="password" name="password">
        <input type="submit" value="opslaan">
        <input type="checkbox" name="allow" value="true">
        welke kleur?:
        <input type="radio" name="color" value="1">
        <input type="radio" name="color" value="2">
        <input type="radio" name="color" value="3">


    </form>
@endsection



