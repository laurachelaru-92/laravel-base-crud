@extends('layouts.page')

@section('page_title')
    Home
@endsection

@section('page_content')
<div id="homepage-wrapper">    
    <h1>I nostri libri</h1>
    <ul>
        @foreach($books as $book)
            <li>ISBN: {{$book->isbn}}</li>
            <li>Titolo: {{$book->title}}</li>
            <li>Autore: {{$book->author}}</li>
            <li>Genere: {{$book->genre}}</li>
            <li>Editore: {{$book->edition}}</li>
            <li>Nr. pagine: {{$book->pages}}</li>
            <li>Anno di pubblicazione: {{$book->year}}</li>
            <li><img src="{{$book->image}}" alt="{{$book->title}} cover"></li>
        @endforeach
    </ul>
    <a href="{{route('books.create')}}">Crea nuovo</a>
</div>
@endsection
