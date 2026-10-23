<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorsBookController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();

        $relations = \App\Models\AuthorsBook::with(['author', 'book'])->get();

    return view('authors_books.index', compact('authors', 'books', 'relations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required|exists:authors,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $relation = new \App\Models\AuthorsBook();
        $relation->author_id = $request->author_id;
        $relation->book_id = $request->book_id;
        $relation->save();

        return redirect()->route('authors_books.index');
    }

    public function destroy($id)
    {
        $relation = \App\Models\AuthorsBook::findOrFail($id);
        $relation->delete();

        return redirect()->route('authors_books.index');
    }
}