<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public  function index()
  {

    $books = Books::latest()->paginate(5);

    return view('books.index')
      ->with('books',$books);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public  function create()
  {
    return view('books.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public  function store(Request $request) {
    $data = $request->validate([
      'name'  =>  'required|string',
      'serial'  =>  'required|string',
      'writer' =>  'required|string',
      'price' =>  'required|string',
    ]);
    Books::create($data);

    return redirect()->route('books.index')
      ->with('success','Books added successfully.');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Books  $book
   * @return \Illuminate\Http\Response
   */
  public  function show(Books $book) {

      return view('books.show',compact('book'));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Books  $book
   * @return \Illuminate\Http\Response
   */
  public  function edit(Books $book) {

    return view('books.edit',compact('book'));

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Books  $book
   * @return \Illuminate\Http\Response
   */
  public  function update(Request $request,  Books $book) {
    $data = $request->validate([
      'name'  =>  'required',
      'serial'  =>  'required',
      'writer' => 'required',
      'price' => 'required',
    ]);

    $book->update($data);
    return redirect()->route('books.index')
      ->with('success','Books updated successfully');
  }

  /**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Books  $book
 * @return \Illuminate\Http\Response
 */
  public  function destroy(Books $book) {

    $book->delete();
    return redirect()->route('books.index')
      ->with('success','Books deleted successfully');
  }

}
