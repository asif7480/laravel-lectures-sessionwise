<h1>Welcome, {{ $user->name }} ({{ $user->role }})</h1>

@if($user->role == 'admin')
    <p>This is admin content</p>
@elseif($user->role == 'manager')
    <p>This is manager content</p>
@else
    <p>This is user content</p>
@endif

<a href="/logout">Logout</a>
