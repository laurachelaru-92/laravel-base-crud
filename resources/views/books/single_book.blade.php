@extends('layouts.page')

@section('page_title')
    {{$book->title}}
@endsection

@section('page_content')
<div id="single-book-wrapper">    
    <ul>
        <li>ISBN: {{$book->isbn}}</li>
        <li>Titolo: {{$book->title}}</li>
        <li>Autore: {{$book->author}}</li>
        <li>Genere: {{$book->genre}}</li>
        <li>Editore: {{$book->edition}}</li>
        <li>Nr. pagine: {{$book->pages}}</li>
        <li>Anno di pubblicazione: {{$book->year}}</li>
        <li><img src="{{$book->image}}" alt="{{$book->title}} cover"></li>
    </ul>
</div>
@endsection
