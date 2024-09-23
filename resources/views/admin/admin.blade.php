<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">M.R Lontong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('user') }}">Menu</a>
                </li>
            </ul>

            <!-- Menambahkan item menu admin di sebelah kanan -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('menu') }}">Menu Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong">
                    <div class="card-body text-center">
                        <div class="img-container mb-4">
                            <img src="{{ asset('images/lontong.jpg') }}" alt="Lontong Image" class="img-fluid rounded-circle" style="max-width: 150px;">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Username</label>
                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
