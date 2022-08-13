@extends('layouts.main')

@section('content')

<section class="content">
  <h1>{{ $title }}</h1>

  <label for="staticEmail" class="col-sm-2 col-form-label">Book Author :</label>
  <select name="" id="">
    <option value="">--book author--</option>
    @foreach ($books as $book)
    <option value="{{ $book->id }}" @if($_GET) @if($_GET['book']==$book->id) selected
      @endif @endif >
      {{ $book->author->name }}</option>
    @endforeach
  </select> <br>

  <label for="staticEmail" class="col-sm-2 col-form-label">Book Name :</label>
  <select name="book" id="">
    <option value="">--book name--</option>
    @foreach ($books as $book)
    <option value="{{ $book->id }}" @if($_GET) @if($_GET['book']==$book->id) selected
      @endif @endif >
      {{ $book->title }}</option>
    @endforeach
  </select> <br>

  <label for="staticEmail" class="col-sm-2 col-form-label">Rating :</label>
  <select name="rating" id="">
    <option value="">-- rating --</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select> <br>

  </div>
  <button type="button" class="btn btn-primary mb-4">Submit</button>
</section>

@endsection