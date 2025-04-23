<h1>Registeration Form</h1>

@if ($errors->any())
    {{ print_r($errors->all())}}
@endif

<form method="POST" action="{{ url('register') }}">
    @csrf
    <input name="name" placeholder="Name">
    <input name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    <button type="submit">Register</button>
</form>

<a href="{{ url("/login")}}">Already have an account.</a>