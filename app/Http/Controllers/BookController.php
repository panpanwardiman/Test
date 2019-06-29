<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::paginate(5);

        return view('books.index', ['books' => $books]);

        // dd($books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();

        return view('books.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|unique:books,name',
            'author' => 'required|max:50',
            'published_at' => 'required',
            'isbn' => 'required|numeric'            
        ]);

        $input = $request->all();

        Book::create($input);        

        return redirect()->route('book.index')->with('success', 'Saved data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = \App\Category::all();

        return view('books.edit', ['book' => $book, 'categories' => $categories]);
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
        $request->validate([
            'name' => 'required|max:100|unique:books,name,'.$id,
            'author' => 'required|max:50',
            'published_at' => 'required',
            'isbn' => 'required|numeric'            
        ]);

        $book = Book::findOrFail($id);  
        $input = $request->all();

        $book->update($input);

        // dd($input);

        return redirect()->route('book.index')->with('info', 'Updated data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('book.index')->with('info', 'Deleted data !');
    }

    public function search(Request $request) 
    {
        $books = Book::when($request->q, function($query) use ($request) {
            $query->where('name', 'LIKE', '%'. $request->q . '%');
        })->paginate(5);

        $books->appends($request->only('q'));

        return view('books.index', ['books' => $books]);
    }

}
