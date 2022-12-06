@extends('layouts.app')

@section('content')
  <div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Show Book</h2>
    </div>
    <div  class="pull-right">
      <a  class="btn btn-primary"  href="{{ route('books.index') }}"> Back</a>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Name:</strong>
      {{ $book->bookname }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Serial:</strong>
      {{ $book->book_serial }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Writer:</strong>
      {{ $book->book_writer }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Price:</strong>
      {{ $book->book_price }}
    </div>
  </div>
  </div>
@endsection