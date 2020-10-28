@extends('layouts.page')

@section('page_title')
    Home
@endsection

@section('page_content')
<div id="homepage-wrapper">    
    <h1>I nostri libri</h1>
    <div id="books-container">
        @foreach($books as $book)
            <ul>
                <li><strong>ISBN:</strong> {{$book->isbn}}</li>
                <li><strong>Titolo:</strong> {{$book->title}}</li>
                <li><strong>Autore:</strong> {{$book->author}}</li>
                <li><strong>Genere:</strong> {{$book->genre}}</li>
                <li><strong>Editore:</strong> {{$book->edition}}</li>
                <li><strong>Nr. pagine:</strong> {{$book->pages}}</li>
                <li><strong>Anno di pubblicazione:</strong> {{$book->year}}</li>
                <li><a href="{{route('books.show', $book->id)}}"><img src="{{$book->image}}" alt="{{$book->title}} cover"></a></li>
                <li class="edit"><a href="{{route('books.edit', $book->id)}}"><i class="fas fa-edit"></i></a></li>
                <li class="delete"><a href="#"><i class="far fa-trash-alt"></i></a></li>
            </ul>
        @endforeach
    </div>
    <a href="{{route('books.create')}}">Crea nuovo</a>
</div>
@endsection
