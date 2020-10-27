@extends('layouts.page')

@section('page_title')
    Aggiungi un libro
@endsection

@section('page_content')
<div id="create-wrapper">    
    <h1>Aggiungi un libro</h1>
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method("POST")
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" placeholder="Codice ISBN" name="isbn" id="isbn">
        </div>
        <div>
            <label for="titolo">Titolo</label>
            <input type="text" placeholder="Titolo" name="title" id="titolo">
        </div>
        <div>
            <label for="autore">Autore</label>
            <input type="text" placeholder="Autore" name="author" id="autore">
        </div>
        <div>
            <label for="genere">Genere</label>
            <input type="text" placeholder="Genere" name="genre" id="genere">
        </div>
        <div>
            <label for="editore">Editore</label>
            <input type="text" placeholder="Editore" name="edition" id="editore">
        </div>
        <div>
            <label for="pagine">Nr. pagine</label>
            <input type="number" name="pages" id="pagine">
        </div>
        <div>
            <label for="immagine">Immagine di copertina</label>
            <input type="text" placeholder="Immagine di copertina" name="image" id="immagine">
        </div>
        <div>
            <label for="anno">Anno di pubblicazione</label>
            <input type="number" name="year" id="anno">
        </div>
        <input type="submit" value="Crea">
    </form>
</div>
@endsection
