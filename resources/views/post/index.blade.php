@extends('layouts.main')
@section('content')

<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">images</th>
      <th scope="col">likes</th>
      <th scope="col">is_published</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>

  
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th>
          {{ $post->id }}
      </th>
      <td>
          {{ $post->title }}
      </td>
      <td>
          {{ $post->content }}
      </td>
      <td>
          {{ $post->image }}
      </td>
      <td>
          {{ $post->likes }}
      </td>
      <td>
          {{ $post->is_published }}
      </td>
      <td>
          {{ $post->created_at }}
      </td>
    </tr>
    @endforeach
  </tbody>
  

</table>
@endsection