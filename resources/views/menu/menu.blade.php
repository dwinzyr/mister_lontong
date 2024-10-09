<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

            <!-- Menambahkan item menu admin di sebelah kanan -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('menu') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Menu Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('admin') }}" style="background-color: #ff9800; border: none; border-radius: 20px;">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
    <div class="container container-custom py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg" style="border-radius: 1rem; background-color: rgba(255, 255, 255, 0.8);">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4" style="color: #000000;">Tambah Menu Makanan</h2>
                        <form>
                            <div class="mb-3">
                                <label for="inputName" class="form-label" style="color: #00796B;">Nama Makanan</label>
                                <input type="text" class="form-control form-control-lg custom-input" id="inputName" placeholder="Masukkan Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputStock" class="form-label" style="color: #00796B;">Stock Makanan</label>
                                <input type="number" class="form-control form-control-lg custom-input" id="inputStock" placeholder="Masukkan Stock" required>
                            </div>

                            <div class="d-grid">
                            <button type="submit" class="btn btn-lg" style="background-color: #007bff; color: white;">Simpan</button>
                            </div>
                        </form>
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

<style>
  body {
      background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: white;
  }

  .form-control.custom-input {
      background-color: rgba(255, 255, 255, 0.9);
      border: 2px solid #00796B;
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 16px;
      color: #00796B;
      transition: all 0.3s ease-in-out;
  }

  .form-control.custom-input:focus {
      border-color: #005f4f;
      box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
  }

  .form-control::placeholder {
      color: #00796B;
      opacity: 0.6;
      font-style: italic;
  }

  .btn-lg {
      border-radius: 30px;
      font-size: 18px;
      transition: background-color 0.3s ease-in-out;
  }

  .btn-lg:hover {
      background-color: #005f4f;
  }
</style>
