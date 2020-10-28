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
                <li class="delete"><i class="far fa-trash-alt"></i></li>
                <li class="confirm_delete d-none">
                    <h2>Vuoi davvero cancellare questo libro?</h2>
                    <form action="{{route('books.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="delete_yes" type="submit" value="Sì">
                    </form>
                    <button class="delete_no">No</button>
                </li>
            </ul>
        @endforeach
    </div>
    <a href="{{route('books.create')}}">Crea nuovo</a>
</div>
@endsection
