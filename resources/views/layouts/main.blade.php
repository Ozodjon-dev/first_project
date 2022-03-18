<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <nav>
                <ul>
                    <li><a href="{{ route('main.index') }}">Main</a></li>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a href="{{ route('about.index') }}">About</a></li>
                    <li><a href="{{ route('contacts.index') }}">Contacts</a></li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>