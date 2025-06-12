<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
</head>

<body>
    <h2>Create User</h2>
    <form method="POST" action="/users/store">
        @csrf
        <label>Name:</label><input type="text" name="name"><br>
        <label>Email:</label><input type="email" name="email"><br>
        <label>Password:</label><input type="text" name="password"><br>
        <label>Address:</label><input type="text" name="address"><br>
        <label>Phone:</label><input type="text" name="phone"><br>
        <button type="submit">Save</button>
    </form>
</body>

</html>