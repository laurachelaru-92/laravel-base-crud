<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view("books.index", ["books" => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = $request->all();

        $request->validate([
            "isbn" => "required|unique:books|max:13",
            "title" => "required|max:30",
            "author" => "required|string|max:50",
            "genre" => "required|string|max:30",
            "edition" => "required|string|max:50",
            "pages" => "required|integer|",
            "image" => "required",
            "year" => "required|integer|max:4"
        ]);

        $bookNew = new Book;
        $bookNew->isbn = $book["isbn"];
        $bookNew->title = $book["title"];
        $bookNew->author = $book["author"];
        $bookNew->genre = $book["genre"];
        $bookNew->edition = $book["edition"];
        $bookNew->pages = $book["pages"];
        $bookNew->image = $book["image"];
        $bookNew->year = $book["year"];

        $bookNew->save();

        return redirect()->route("books.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book = Book::find($id);

        return view("books.single_book", ["book" => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
