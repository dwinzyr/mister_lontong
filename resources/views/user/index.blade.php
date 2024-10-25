<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D6EFD8;">
        <a class="navbar-brand" href="#" style="color: black;">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn text-white" href="{{ url('/') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Home</a>
            </li>
            </ul>

                <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn text-white" href="{{ url('user') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Menu</a>
                </li>
                </ul> -->

            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                 <a class="nav-link btn text-white ml-2" href="{{ url('admin') }}" style="background-color: orange; border-radius: 50px;">Login</a>
            </li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
     .navbar {
        background: linear-gradient(45deg, #D6EFD8, #D6EFD8);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 10px 20px;
    }

    .navbar-brand { 
        color: #007bff;
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
</style>