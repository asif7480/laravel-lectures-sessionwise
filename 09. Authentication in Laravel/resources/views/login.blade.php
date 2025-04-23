<h1>Login Form</h1>

@if ($errors->any())
    {{ print_r($errors->all())}}
@endif
<form method="POST" action="{{ url('login') }}">
    @csrf
    <input name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>


<a href="{{ url("/register")}}">Don't have an account.</a>