@extends('layouts.main')

@section('content')

<section class="content">
  <h1>{{ $title }}</h1>
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Author Name</th>
        <th class="text-center">Voter</th>
      </tr>
    </thead>
    <tbody>
      @php $no=1;
      @endphp
      @foreach ($trendings as $t)
      <tr>
        <td class="text-center">{{ $no++ }}</td>
        <td class="text-center">{{ $t->author->name }}</td>
        <td class="text-center">{{ $t->voter }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</section>

@endsection