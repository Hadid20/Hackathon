<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <h1>hallo {{ auth()->user()->name }}</h1> --}}
    <a href="{{ route('absen.create') }}">Absen</a>

    <div id="my-camera"></div>
    <div id="result"></div>
</body>

</html>