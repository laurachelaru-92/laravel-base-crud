@extends('layouts.page')

@section('page_title')
    Modifica libro
@endsection

@section('page_content')
<div id="edit-wrapper">    
    <h1>Modifica il libro</h1>
    <form action="{{route('books.update', $book->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="isbn">ISBN</label>
            <input value="{{$book->isbn}}" required type="text" placeholder="Codice ISBN" name="isbn" id="isbn">
        </div>
        <div>
            <label for="titolo">Titolo</label>
            <input value="{{$book->title}}" required type="text" placeholder="Titolo" name="title" id="titolo">
        </div>
        <div>
            <label for="autore">Autore</label>
            <input value="{{$book->author}}" required type="text" placeholder="Autore" name="author" id="autore">
        </div>
        <div>
            <label for="genere">Genere</label>
            <input value="{{$book->genre}}" required type="text" placeholder="Genere" name="genre" id="genere">
        </div>
        <div>
            <label for="editore">Editore</label>
            <input value="{{$book->edition}}" required type="text" placeholder="Editore" name="edition" id="editore">
        </div>
        <div>
            <label for="pagine">Nr. pagine</label>
            <input value="{{$book->pages}}" required type="number" name="pages" id="pagine">
        </div>
        <div>
            <label for="immagine">Immagine di copertina</label>
            <input value="{{$book->image}}" required type="text" placeholder="Immagine di copertina" name="image" id="immagine">
        </div>
        <div>
            <label for="anno">Anno di pubblicazione</label>
            <input value="{{$book->year}}" required type="number" name="year" id="anno">
        </div>
        <input type="submit" value="Conferma">
    </form>
</div>
@endsection
