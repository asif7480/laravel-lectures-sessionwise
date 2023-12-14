<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        print_r($errors->all())

    @endphp

    <form action="{{url('/')}}/form" method="post">
        @csrf
        Name: <br>
        <input type="text" name="name" id="" value="{{ old('name') }}">
        <br>
        <span style="color:red">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>

        email: <br>
        <input type="email" name="email" id="" value="{{ old('email') }}">
        <br>
        <span style="color:red">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <br>

        password: <br>
        <input type="text" name="password" id="" value="{{ old('password') }}">
        <br>
        <span style="color:red">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <br>

        confirm_password: <br>
        <input type="text" name="password_confirmation" id="" value="{{ old('password_confirmation') }}">
        <br>
        <span style="color:red">
            @error('password_confirmation')
                {{ $message }}
            @enderror
        </span>
        <br>

        <input type="submit" value="click here" name="submit">

    </form>
</body>
</html>