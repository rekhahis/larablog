@extends('layouts.app')

@section('content')
  <div  class="row">
  <div  class="col-lg-12 margin-tb">
    <div  class="pull-left">
       <h2>Laravel Shop | All Books</h2>
    </div>
    <div  class="pull-right">
        <a  class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
    </div>
  </div>
  </div>
 @if ($message = Session::get('success'))
  <div  class="alert alert-success"> 
    <p>{{ $message }}</p>
  </div>
 @endif

  <table class="table table-bordered">
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Serial</th>
    <th>Writer</th>
    <th>Price</th>
    <th width="280px">Action</th>
  </tr>
  @foreach ($books as $book)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $book->serial }}</td>
    <td>{{ $book->writer }}</td>
    <td>{{ $book->price }}</td>
    <td>
    <form  action="{{ route('books.destroy',$book->id) }}" method="POST">
    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
       @csrf
       @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
  </tr>
 @endforeach
  </table>
 {!! $books->links() !!}
@endsection