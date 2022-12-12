@extends('layouts.app')

@section('content')
  <div  class="row">
  <div  class="col-lg-12 margin-tb">
    <div  class="pull-left">
       <h2>Laravel Shop | All Books</h2>
    </div>
    <div  class="pull-right">
        <a  class="btn btn-success" href="{{ route('admin.books.create') }}"> Create New Book</a>
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
    <th width="50px">No.</th>
    <th width="50px">Name</th>
    <th width="50px">Serial</th>
    <th width="50px">Writer</th>
    <th width="50px">Price</th>
    <th width="50px">Action</th>
  </tr>
  @foreach ($books as $book)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $book->name }}</td>
    <td>{{ $book->serial }}</td>
    <td>{{ $book->writer }}</td>
    <td>{{ $book->price }}</td>
    <td>
    
    <a class="btn btn-info" href="{{ route('admin.books.show',$book->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('admin.books.edit',$book->id) }}">Edit</a>
    <form  action="{{ route('admin.books.destroy',$book->id) }}" method="POST">
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