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
  </tbody>
</table>
<div class="container">
  <div class="row">
    <div class="col text-center">
      <a href="{{ route('posts.index') }}"><button class="btn btn-info col-md-2" type="button"><h3>Back</h3></button></a>
    </div>
  </div>
</div>

<!-- <div>{{ $post->id }}</div>
<div>{{ $post->title }}</div>
<div>{{ $post->content }}</div>
<div>{{ $post->images }}</div>
<div>{{ $post->likes }}</div>
<div>{{ $post->is_published }}</div>
<div>{{ $post->created_at }}</div> -->

@endsection