<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required|max:255'
        ];
        $this->validate($request,$validate_rule);
        $book = new Book;
        $book->title = $request->name;
        $book->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/');
    }
}
