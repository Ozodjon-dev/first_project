<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('main.index') }}">Main</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts.index') }}">Contacts</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Link</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('main.index') }}">Main</a></li>
                            <li><a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a></li>
                            <li><a class="dropdown-item" href="{{ route('about.index') }}">About</a></li>
                            <li><a class="dropdown-item" href="{{ route('contacts.index') }}">Contacts</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled">Link</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control c" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- <nav>
                <ul>
                    <li><a href="">Main</a></li>
                    <li><a href="">Posts</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="{{ route('contacts.index') }}">Contacts</a></li>
                </ul>
            </nav> -->
        </div>
        @yield('content')
    </div>
</body>
</html>