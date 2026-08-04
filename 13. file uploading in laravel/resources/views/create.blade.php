<!DOCTYPE html>
<html>

<head>
    <title>Create Profile</title>
</head>

<body>

    <h1>Create Profile</h1>

    <form action="/store" method="POST" enctype="multipart/form-data">

        @csrf

        <div>
            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}">
            @error('username')
                {{ $message }}
            @enderror
        </div>

        <br>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                {{ $message }}
            @enderror
        </div>

        <br>

        <div>
            <label>Profile Image</label>
            <input type="file" name="profile_image" accept="image/*">
            @error('profile_image')
                {{ $message }}
            @enderror
        </div>

        <br>

        <button type="submit">
            Create Profile
        </button>

    </form>

</body>

</html>