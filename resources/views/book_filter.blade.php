@extends('layouts.main')

@section('content')
<style type="text/css">
  .pagination li {
    float: left;
    list-style-type: none;
    margin: 5px;
  }
</style>

<section class="content">
  <label for="staticEmail" class="col-sm-2 col-form-label">List Shown :</label>
  <select name="" id="">
    <option value="">10</option>
    <option value="">50</option>
    <option value="">100</option>
  </select>
  <form action="" method="get">
    <div class="mb-13 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Search :</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="">
      </div>
    </div>
    <button type="button" class="btn btn-primary mb-4">Submit</button>
  </form>

  <h1>{{ $title }}</h1>

  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Book Name</th>
        <th class="text-center">Category Name</th>
        <th class="text-center">Author Name</th>
        <th class="text-center">Averaging Rating</th>
        <th class="text-center">Voter</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $no => $book)
      <tr>
        <td class="text-center">{{ $no+1 }}</td>
        <td class="text-center">{{ $book->title }}</td>
        <td class="text-center">{{ $book->category->name }}</td>
        <td class="text-center">{{ $book->author->name }}</td>
        <td class="text-center">{{ $book->rating }}</td>
        <td class="text-center">{{ $book->voter }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  Halaman : {{ $books->currentPage() }}<br />
  Jumlah Data : {{ $books->total() }}<br />
  Data Per Halaman : {{ $books->perPage() }}<br />
  <br>
  {{ $books->links() }}
  </div>
</section>

@endsection