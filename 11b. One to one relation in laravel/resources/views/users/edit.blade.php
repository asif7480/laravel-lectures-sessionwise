<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>
    <form method="POST" action="/users/update/{{ $user->id }}">
        @csrf
        <label>Name:</label><input type="text" name="name" value="{{ $user->name }}"><br>
        <label>Email:</label><input type="email" name="email" value="{{ $user->email }}"><br>
        <label>Password:</label><input type="text" name="password" value="{{ $user->password }}"><br>
        <label>Address:</label><input type="text" name="address" value="{{ $user->profile->address }}"><br>
        <label>Phone:</label><input type="text" name="phone" value="{{ $user->profile->phone }}"><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>