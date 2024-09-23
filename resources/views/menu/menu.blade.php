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
                    <a class="nav-link" href="{{ url('admin') }}">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
    <div class="container container-custom">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Tambah Menu Makanan</h2>
                        <form>
                            <div class="mb-3">
                                <label for="inputName" class="form-label">Nama Makanan</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Masukkan Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputStock" class="form-label">Stock Makanan</label>
                                <input type="number" class="form-control" id="inputStock" placeholder="Masukkan Stock" required>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="inputPhone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="inputPhone" placeholder="Masukkan Nomor Telepon" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Alamat</label>
                                <textarea class="form-control" id="inputAddress" rows="3" placeholder="Masukkan Alamat" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="inputDate" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="inputDate" required>
                            </div> -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
