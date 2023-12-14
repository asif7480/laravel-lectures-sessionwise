<!DOCTYPE html>
<html lang="en">
<head>
    <title>Basic syntax of laravel blade syntax</title>
</head>
<body>
    <p>My name is: {{ $name }}</p>
    {{ "<h2>hello</h2>" }}
    {!! "<h2>hello</h2>" !!}
    <br>
    {{ "<script>alert('hello')</script>" }}
    {!! "<script>alert('hello')</script>" !!}
    {{ time() }}
    <br>
    <p>d/m/y: {{ date('d/m/y') }}</p>
</body>
</html>