<!DOCTYPE html>
<html>

<head>
    <title>Users List</title>
</head>

<body>
    <h2>All Users</h2>
    <a href="/users/create">Add New</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->profile->address ?? '' }}</td>
                <td>{{ $user->profile->phone ?? '' }}</td>
                <td>
                    <a href="/users/edit/{{ $user->id }}">Edit</a> |
                    <a href="/users/delete/{{ $user->id }}" onclick="return confirm('Delete user?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>