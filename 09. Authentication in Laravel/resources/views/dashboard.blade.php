<h1>Dashboard</h1>

<h1>Welcome, {{ auth()->user()->name }}</h1>
<form method="POST" action="{{ url('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
