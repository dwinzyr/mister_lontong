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

        .card {
            border-radius: 1rem;
        }

        .form-outline input {
            border-radius: 50px;
            padding-left: 40px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .form-outline input:focus {
            border-color: #007bff;
            box-shadow: 0px 4px 6px rgba(0, 123, 255, 0.3);
        }

        .form-outline i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #007bff;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #021526;">
        <a class="navbar-brand text-white" href="#">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn text-white" href="{{ url('/') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('user') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Menu</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('menu') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Menu Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('admin') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Login</a>
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
                                <img src="{{ asset('images/lontong.jpg') }}" alt="Lontong Image" class="img-fluid rounded-circle" style="max-width: 150px;">
                            </div>

                            <form id="loginForm">
                                <div class="form-outline mb-4 position-relative">
                                    <i class="fas fa-user"></i>
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Enter your email" required />
                                </div>

                                <div class="form-outline mb-4 position-relative">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Enter your password" required />
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for form validation
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const passwordField = document.getElementById('typePasswordX-2');
            if (passwordField.value.trim() === "") {
                event.preventDefault(); // Prevent form submission if password is empty
                alert("Please enter your password");
            }
        });
    </script>
</body>
</html>
