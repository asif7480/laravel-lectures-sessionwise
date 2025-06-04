<h1>Login Form</h1>

<form action="{{ url('/login') }}" method="POST">
    @csrf
    <div>
        <input type="email" name="email" id="email" placeholder="john@gmail.com">
        <span>
            @error('email')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="password" name="password" id="password" placeholder="password">
        <span>
            @error('password')
                {{ $message }}
            @enderror
        </span>
    </div>


    <div>
        <input type="submit" value="login">
        <a href="{{ url('/register') }}">Don't have an account</a>
    </div>
</form>
