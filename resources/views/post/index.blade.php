@extends('layouts.main')
@section('content')
<table class="table table-dark table-striped">
  
  
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">images</th>
    </tr>
  </thead>

  <tbody>
    @foreach($posts as $post)
      <tr>
        <th>
            {{ $post->id }}
        </th>
        <td>
            <a href="{{  route('posts.show', $post->id)  }}">{{ $post->title }}</a>
        </td>
        <td>
            {{ $post->content }}
        </td>
        <td>
            {{ $post->image }}
        </td>
      </tr>
    @endforeach
  </tbody>

</table>

<div>
      {{ $posts->links() }}
</div>
@endsection