<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<h1> Hello, Nerd </h1>

<p>
        @foreach ($data as $value)
        <li>{{ $value }}</li>
        @endforeach
</p>

</body>
</html>