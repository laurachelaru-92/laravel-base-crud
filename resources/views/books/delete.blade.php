@extends('layouts.page')

@section('page_title')
    Cancella libro
@endsection

@section('page_content')
<div id="delete-wrapper">    
    <ul>
        <li id="titolo"><strong>Titolo:</strong> {{$book->title}}</li>
        <li><strong>ISBN:</strong> {{$book->isbn}}</li>
        <li><strong>Autore:</strong> {{$book->author}}</li>
        <li><strong>Genere:</strong> {{$book->genre}}</li>
        <li><strong>Editore:</strong> {{$book->edition}}</li>
        <li><strong>Nr. pagine:</strong> {{$book->pages}}</li>
        <li><strong>Anno di pubblicazione:</strong> {{$book->year}}</li>
        <li><img src="{{$book->image}}" alt="{{$book->title}} cover"></li>
    </ul>
    <form action="{{route()}}"></form>
</div>
@endsection
