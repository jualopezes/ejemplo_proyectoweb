<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->birthdate = $request->birthdate;
        $author->save();

        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return redirect()->route('authors.index');
    }
}
