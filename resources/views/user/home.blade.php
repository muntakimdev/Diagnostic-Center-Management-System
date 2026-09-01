<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic Center</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: linear-gradient(to right, #0d6efd, #0dcaf0);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .service-card {
            transition: 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        footer {
            background: #212529;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Diagnostic Center</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>


<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <h1>Welcome to Our Diagnostic Center</h1>
        <p>Accurate Testing | Trusted Doctors | Fast Reports</p>

        @guest
        <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">
            Book Your Test Today
        </a>
        @endguest

    </div>
</section>


<!-- SERVICES -->
<section class="container py-5">

    <h2 class="text-center mb-4">Our Services</h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <h5>Blood Test</h5>
                    <p>Fast and accurate blood testing services.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <h5>X-Ray</h5>
                    <p>High quality digital X-ray diagnostics.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <h5>Ultrasound</h5>
                    <p>Advanced ultrasound imaging services.</p>
                </div>
            </div>
        </div>

    </div>

</section>


<!-- ABOUT -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2>About Us</h2>
        <p>
            Our diagnostic center provides reliable medical testing with modern
            equipment and experienced specialists. We ensure quick and
            accurate reports for better healthcare.
        </p>
    </div>
</section>


<!-- CONTACT -->
<section class="container py-5 text-center">

    <h2>Contact Us</h2>

    <p>Email: info@diagnosticcenter.com</p>
    <p>Phone: +880 1234 567890</p>
    <p>Address: Sylhet, Bangladesh</p>

</section>


<!-- FOOTER -->
<footer class="text-center">
    <p>© 2026 Diagnostic Center | All Rights Reserved</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>