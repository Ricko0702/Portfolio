@extends('main')

@section('body')

<form method="POST">
    @csrf
    Bedrag:<input type="text" name="bedrag">
    exclusief 21% BTW
    
    <input type="submit" value="Bereken">

    </textarea>


</form>


@endsection