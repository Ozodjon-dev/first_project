@extends('layouts.main')
@section('content')
  <body class="bg-light">
      
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Edit contracts</h2>
        </div>
        <div>
          <div class="">
            <h4 class="mb-3">Enter new contract informations</h4>
            <form class="needs-validation" action="{{ route('posts.update', $post->id) }}" method="post">
              @csrf
              @method('patch')
              <div class="row g-4">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Content" value="{{ $post->content }}" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="image" value="{{ $post->image }}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Likes</label>
                <input type="text" class="form-control" id="content" name="likes" placeholder="Likes" value="{{ $post->likes }}" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Is published</label>
                <input type="int" class="form-control" id="image" name="is_published" name="is_published" placeholder="Is published" value="{{ $post->is_published }}" required="">
                <div class="invalid-feedback">
                  Valid is published is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="category">Category select</label>
                <select class="form-control" id="category" name="category_id">
                  @foreach($categories as $category)
                    <option
                    {{ $category->id === $post->category->id ? 'selected' : '' }}

                    value="{{ $category->id }}">{{ $category->title }}
                  </option>
                  @endforeach
                </select>
              </div>

              <div class="col-sm-6">
              <label for="tags">Tags</label>
                <select multiple class="select form-control" id+"tags" name="tags[]">
                  @foreach($tags as $tag)
                      <option 
                        @foreach ($post->tags as $postTag)
                        {{ $tag->id === $postTag->id ? 'selected' : '' }}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}
                      </option>
                  @endforeach
                </select>
              </div>
              <div class="mt-3 col-md-12">
                <button class="w-100 btn btn-primary btn-lg mt-3" type="submit"><h3>Update</h3</button>     
              </div>


            </form>
          </div>
        </div>

      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2021 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script>
      
  </body>
@endsection