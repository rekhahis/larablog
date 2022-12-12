@extends('layouts.app')

@section('content')
  <div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Show Book</h2>
    </div>
    <div  class="pull-right">
      <a  class="btn btn-primary"  href="{{ route('admin.books.index') }}"> Back</a>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Name:</strong>
      {{ $book->name }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Serial:</strong>
      {{ $book->serial }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Writer:</strong>
      {{ $book->writer }}
    </div>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Price:</strong>
      {{ $book->price }}
    </div>
  </div>
  </div>
@endsection