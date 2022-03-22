@extends('layouts.main')
@section('content')
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

  @foreach($posts as $post)
  <tbody>
    <tr>
      <th scope="row">
          {{ $post->id }}
      </th>
      <td>
          {{ $post->title }}
      </td>
    </tr>
  </tbody>
  @endforeach

</table>
@endsection