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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav col-md-8">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('main.index') }}"><h4>Main</h4></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}"><h4>Posts</h4></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('about.index') }}"><h4>About</h4></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts.index') }}"><h4>Contacts</h4></a>
            </li>
        </ul>
        <form class="d-flex col-md-4">
            <input class="form-control ml-2" type="datetime-local" placeholder="Search" aria-label="Search">
            <input class="form-control ml-2" type="datetime-local" placeholder="Search" aria-label="Search">
            <button class="btn btn-info ml-2" type="submit">Search</button>
            <button class="btn btn-info ml-2" type="submit"><h3><b>+</b></h3></button>
        </form>
    </nav>

        @yield('content')
    </div>
</body>
</html>