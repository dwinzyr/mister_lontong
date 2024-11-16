<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            color: black;
        }
        .navbar {
            background: linear-gradient(45deg, #D6EFD8, #D6EFD8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .navbar-brand {
            color: #D6EFD8;
            font-weight: bold;
            font-size: 26px;
            letter-spacing: 1.5px;
        }

        .navbar-nav .nav-link {
            background-color: #ff9800;
            border-radius: 20px;
            margin-right: 10px;
            padding: 8px 15px;
            font-weight: bold;
            transition: all 0.3s;
            color: white;
        }

        .navbar-nav .nav-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-card {
            border-radius: 15px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            background-color: #fff;
            color:black;
        }

        .profile-card-header {
            background-color: #D6EFD8;
            color: black;
            font-weight: bold;
            padding: 20px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .profile-card ul {
            list-style-type: none;
            padding: 20px;
            margin: 0;
            font-size: 16px;
            color: black;
        }

        .profile-card ul li {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            color:black;
        }

        .dashboard-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .dashboard-row > .card {
            flex: 1;
            min-width: 300px; /* Responsiveness */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .card-header {
            color: black;
            font-weight: bold;
            padding: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #D6EFD8;
        }

        .card-body {
            padding: 20px;
            font-size: 16px;
            color: #616161;
        }
        .crud-card-header {
            background-color: #D6EFD8;
            color: black;
        }

        .pesanan-header {
            background-color: #D6EFD8;
            color: black
        }

        .crud-add-button {
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 22px;
            border-radius: 50%;
            width: 55px;
            height: 55px;
            text-align: center;
            line-height: 50px;
            position: absolute;
            top: -25px;
            right: -25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .crud-add-button:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .dashboard-row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#" style="color: black;">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn text-white" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('user') }}">Menu</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::check()) <!-- Jika user sudah login -->
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link btn btn-logout text-white" href="{{ url('admin') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn text-white" href="{{ url('admin') }}">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">
        <div class="row">
            <!-- Profile Section -->
            <div class="col-md-3">
                <div class="card profile-card">
                    <div class="card-header profile-card-header">
                        <h5>Profile</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: Suryawan</li>
                        <li class="list-group-item">Status: Admin</li>
                    </ul>
                </div>
            </div>

            <!-- Dashboard Overview -->
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Dashboard Overview</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome Suryawan!</h5>
                        <p class="card-text">This is a basic overview of your app's performance and data.</p>
                    </div>
                </div>

                <!-- Dashboard Stats and CRUD Section -->
                <div class="dashboard-row">
                    <!-- Pesanan Hari Ini -->
                    <div class="card">
                        <div class="card-header pesanan-header">
                            <h6>Pesanan Hari Ini</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center">{{ $dailyOrderCount ?? 0 }} Pesanan</h3>
                        </div>
                    </div>

                    <!-- CRUD -->
                    <div class="card">
                        <div class="card-header crud-card-header">
                            <h5>CRUD</h5>
                        </div>
                        <div class="card-body">
                            <p>This is a placeholder for the CRUD operations.</p>
                            <button class="crud-add-button">
                                <a href="{{ url('makanans') }}" style="color: white;">+</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
