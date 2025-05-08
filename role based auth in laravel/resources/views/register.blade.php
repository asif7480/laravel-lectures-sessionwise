<h1>Registration Form</h1>

<form action="{{ route("register")}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <select name="role" required>
        <option value="">Select Role</option>
        <option value="user">User</option>
        <option value="manager">Manager</option>
        <option value="admin">Admin</option>
    </select><br>
    <button type="submit">Register</button>
</form>