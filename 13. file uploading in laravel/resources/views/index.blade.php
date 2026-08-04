<!DOCTYPE html>
<html>
<head>
    <title>Profiles</title>
</head>
<body>

    <h1>All Profiles</h1>

    <a href="/create">
        Create New Profile
    </a>

    <hr>

    @forelse ($profiles as $profile)

        <div>

            @if ($profile->profile_image)
                <img
                    src="{{ asset('storage/' . $profile->profile_image) }}"
                    width="150"
                    height="150"
                    alt="{{ $profile->username }}"
                >
            @endif

            <h2>
                {{ $profile->username }}
            </h2>

            <p>
                {{ $profile->email }}
            </p>

        </div>

        <hr>

    @empty

        <p>No profiles found.</p>

    @endforelse

</body>
</html>