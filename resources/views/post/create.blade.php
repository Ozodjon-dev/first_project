@extends('layouts.main')
@section('content')
  <body class="bg-light">
      
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Contracts</h2>
        </div>
        <div>
          <div class="">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" action="{{ route('posts.store') }}" method="post">
              @csrf
              <div class="row g-4">
              <div class="form-group col-sm-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ old('title') }}">

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror

              </div>

              <div class="col-sm-6">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Content" value="{{ old('content') }}">

                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror

              </div>

              <div class="col-sm-6">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" name="title" placeholder="Image" value="{{ old('image') }}">

                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror

              </div>

              <div class="col-sm-6">
                <label for="likes" class="form-label">Likes</label>
                <input type="text" class="form-control" id="likes" name="likes" placeholder="Likes" value="{{ old('likes') }}">

                @error('likes')
                <p class="text-danger">{{ $message }}</p>
                @enderror

              </div>

              <div class="col-sm-6">
                <label for="is_published" class="form-label">Is published</label>
                <input type="int" class="form-control" id="is_published" name="is_published" name="is_published" placeholder="Is published" value="{{ old('is_published') }}">
                
                @error('is_published')
                <p class="text-danger">The is published field is required.</p>
                @enderror

              </div>

              <div class="col-sm-6">
                <label for="category">select category </label>
                <select class="form-control" id="category" name="category_id">
                  @foreach($categories as $category)
                    <option
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
                    {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) ? ' selected' : '' }}
                    value="{{ $tag->id }}">{{ $tag->title }}
                  </option>
                @endforeach
                
                </select>
              </div>

              <div class="mt-3 col-md-12">
                <button class="w-100 btn btn-primary btn-lg mt-3" type="submit"><h3>Create</h3</button>     
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

    <!-- <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script> -->
      
  </body>
@endsection