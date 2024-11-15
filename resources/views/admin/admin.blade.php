<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

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

        .card {
            border-radius: 1rem;
        }

        /* Form outline improvement */
        .form-outline {
            position: relative;
            margin-bottom: 20px;
        }

        .form-outline i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #007bff;
            font-size: 18px;
        }

        .form-outline input {
            padding-left: 45px;
            border-radius: 50px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            height: 45px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .form-outline input:focus {
            border-color: #007bff;
            box-shadow: 0px 4px 6px rgba(0, 123, 255, 0.3);
        }

        .form-outline input::placeholder {
            color: #888;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .img-container img {
            border: none;
        }

        body {
            background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .card-body {
            padding: 2rem;
        }

        /* Icon color */
        .form-outline i {
            color: #ff9800;
        }

        .navbar-toggler {
            border-color: #ff9800;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba(255, 152, 0, 1)" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }
    </style>
</head>

<body>

    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <nav class="navbar navbar-expand-lg" style="background-color: #021526;">
        <a class="navbar-brand" href="#" style="color: black;">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn text-white" href="{{ url('/') }}"
                        style="background-color: #ff9800; border: none; border-radius: 20px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('user') }}"
                        style="background-color: #ff9800; border: none; border-radius: 20px;">Menu</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('admin') }}"
                        style="background-color: #ff9800; border: none; border-radius: 20px;">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-lg" style="border-radius: 1rem; background-color: rgba(255, 255, 255, 0.8);">
                        <div class="card-body text-center">
                            <div class="img-container mb-4">
                                <img src="{{ asset('images/lontong.jpg') }}" alt="Lontong Image"
                                    class="img-fluid rounded-circle" style="max-width: 150px;">
                            </div>

                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4 position-relative">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="username" name="username" placeholder="Enter Username"
                                        value="{{ old('username') }}" class="form-control" required>
                                </div>

                                <div class="form-outline mb-4 position-relative">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password" placeholder="Enter Password"
                                        value="{{ old('password') }}" name="password" class="form-control" required>
                                </div>

                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
