<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">

        <span class="navbar-brand">Diagnostic Center</span>

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

    <h2>User Dashboard</h2>
    <p>Welcome {{ Auth::user()->name }}</p>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Book Test</h5>
                    <p>Schedule your diagnostic tests</p>
                    <button class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>View Reports</h5>
                    <p>Check your medical reports</p>
                    <button class="btn btn-success">View Reports</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Appointments</h5>
                    <p>See your test appointments</p>
                    <button class="btn btn-warning">My Appointments</button>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>