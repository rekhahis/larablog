@extends('layouts.app')

@section('content')
<div  class="row">
  <div  class="col-lg-12 margin-tb">
      <div  class="pull-left">
         <h2>Add New Book</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary"  href="{{ route('books.index') }}"> Back</a>
      </div>
  </div>
</div>

@if ($errors->any())
  <div  class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<form  action="{{ route('books.store') }}"  method="POST">
 @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Book Name:</strong>
      <input  type="text"  name="bookname"  class="form-control"  placeholder="Book Name">
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Serial:</strong>
      <input type="text" class="form-control" name="book_serial"  placeholder="Book Serial">
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Writer:</strong>
      <input type="text" class="form-control" name="book_writer"  placeholder="Book Writer">
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Book Price:</strong>
      <input type="text" class="form-control" name="book_price"  placeholder="Book Price">
    </div>
  </div>
  <div  class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button  type="submit"  class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>
@endsection