<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor</title>
</head>
<body>
    <p>
        Ip : {{ $ip }} <br>
        Device : {{ $device }} <br>
        Browser : {{ $browser }} <br>
        Platform : {{ $platform }} <br>
        User Agent : {{ $userAgent }} <br>
        Language :
            <ul>
                @foreach($language as $language)
                <li>{{ $language }}</li>
                 @endforeach
            </ul> <br>
    </p>
    <p>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </p>
</body>
</html>
