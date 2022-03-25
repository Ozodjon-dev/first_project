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
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" name="title" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Likes</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Is published</label>
                <input type="int" class="form-control" id="image" name="is_published" name="is_published" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid is published is required.
                </div>
              </div>

              <div class="mt-3 col-md-12">
                <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">Continue to checkout</button>                
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