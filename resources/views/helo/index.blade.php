<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Views</title>
</head>
<body>
    <h1>Nama saya adalah = {{ $nama }}</h1>
    <ul>
        @foreach ($hobby as $hob)
        <li>{{ $hob }}</li>
        @endforeach
    </ul>
</body>
</html>