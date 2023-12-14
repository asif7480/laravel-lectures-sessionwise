<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals in laravel blade syntax</title>
</head>
<body>
    @if($value == "")
        {{ "No value pass in the url" }}
    @elseif($value == 56) 
        {{ "$value is owned by king babar "}}
    @else
        {{ "value is: $value" }}
    @endif


    @switch($value)
        @case(10)
            <p>Enter number is: {{ $value}}</p>
            @break

        @case(20)
            <p>Enter number is: {{ $value }}</p>
            @break
        
        @default
            <p>Value not matching the above cases</p>

    @endswitch


</body>
</html>