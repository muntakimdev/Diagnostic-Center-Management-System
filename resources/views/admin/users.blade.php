<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Manage Users</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="container mt-5">

    <h2>User Management</h2>

    <a href="{{ url('/home') }}" class="btn btn-secondary mb-3 fw-bold fs-1">
        Back to Admin Dashboard
    </a>

    <table class="table table-bordered table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>

            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->usertype==0)
                            User
                        @else
                            Admin
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        No registered users found.
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>

</div>

</body>
</html>