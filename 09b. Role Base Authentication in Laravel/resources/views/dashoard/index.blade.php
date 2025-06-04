<h1>Dashboard</h1>

<h2>Welcome {{ $user->name }}, Role: {{ $user->role }}</h2>


<form action="{{ url('/logout') }}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
