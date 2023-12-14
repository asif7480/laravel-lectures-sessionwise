<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops in laravel blade syntax</title>
</head>
<body>
    <h2>printing values in blade syntax</h2>

    @for($i = 5; $i >= 1; $i--)
        {!! "<br> $i" !!}
    @endfor
</body>
</html>