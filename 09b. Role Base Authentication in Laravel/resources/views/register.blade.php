<h1>Register Form</h1>

<form action="{{ url('/register') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="name" id="name" placeholder="John Doe">
        <span>
            @error('name')
                {{ $message }}
            @enderror
        </span>
    </div>

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
        <select name="role" id="role">
            <option value="user">User</option>
            <option value="manager">Manager</option>
        </select>
        <span>
            @error('role')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="submit" value="register">
        <a href="{{ url('/login') }}">Already have an account</a>
    </div>
</form>
