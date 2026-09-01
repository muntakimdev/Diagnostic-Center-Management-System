<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">

        <span class="navbar-brand">Admin Panel</span>

        <a class="btn btn-danger" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>

    </div>
</nav>


<div class="container mt-5">

    <h2>Admin Dashboard</h2>
    <p>Welcome Admin, {{ Auth::user()->name }}</p>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Manage Users</h5>
                    <p>Update or Delete registered users</p>
                    <a href ="{{route('admin.users')}}" class="btn btn-primary">View Users</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Diagnostic Tests</h5>
                    <p>Add or manage medical tests</p>
                    <button class="btn btn-success">Manage Tests</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Appointments</h5>
                    <p>View test bookings</p>
                    <button class="btn btn-warning">View Appointments</button>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>