<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        echo 'Hello ';
        echo Auth::user()->name ?? 'Anonymous';
        echo '!';
    @endphp
    <br><br>
    @if (Auth::user())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <br><br>
        <a href="{{ route('login') }}">Login</a>
    @endif
</body>

</html>
