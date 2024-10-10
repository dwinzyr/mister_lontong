<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(45deg, #021526, #2a4f75);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .navbar-nav .nav-link {
            background-color: #ff9800;
            border-radius: 20px;
            margin-right: 10px;
            transition: transform 0.3s;
        }

        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
        }

        /* Profile Card */
        .profile-card {
            border-radius: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-card-header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            font-weight: bold;
            padding: 15px;
        }

        .profile-card ul {
            list-style-type: none;
            padding: 10px;
            font-size: 16px;
        }

        .profile-card ul li {
            padding: 10px 0;
        }

        /* CRUD Card */
        .crud-card-header {
            background: linear-gradient(45deg, #ff9800, #e67e22);
            color: white;
            font-weight: bold;
            padding: 15px;
        }

        .crud-add-button {
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 24px;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 45px;
            position: absolute;
            top: -30px;
            right: -30px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .crud-add-button:hover {
            opacity: 0.7;
            transform: scale(1.1);
        }

        /* Custom padding for CRUD section */
        .crud-card {
            width: 100%;
            margin-left: 0;
            position: relative;
            padding: 20px;
            transition: box-shadow 0.3s ease;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .crud-card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .crud-row {
            display: flex;
            justify-content: flex-start;
        }

        /* Dashboard Overview */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 1rem;
        }

        .card-header {
            background: linear-gradient(45deg, #4caf50, #388e3c);
            color: white;
            font-weight: bold;
            padding: 15px;
        }

        /* Footer */
        footer {
            background-color: #021526;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .crud-card {
                width: 100%;
            }

            .crud-add-button {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand text-white" href="#">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('admin') }}">Login</a>
                </li>
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
                        <li class="list-group-item">Name    : Suryawan</li>
                        <li class="list-group-item">Status  : Admin</li>
                    </ul>
                </div>
            </div>

            <!-- Dashboard Overview Section -->
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

                <!-- CRUD Section -->
                <div class="row mt-4 crud-row">
                    <div class="col-md-4">
                        <div class="card crud-card">
                            <div class="card-header crud-card-header">
                                <h5>CRUD</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Here you can manage your CRUD operations.</p>
                            </div>
                            <!-- Add Button -->
                            <button class="crud-add-button">
                                <a href="{{ url('makanans') }}" class="text-white"><i class="fas fa-plus"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        &copy; 2024 M.R Lontong - All Rights Reserved
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
