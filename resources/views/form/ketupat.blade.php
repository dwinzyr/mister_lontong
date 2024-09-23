<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Form Pemesanan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Input nama -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>
                        <!-- Input jumlah pesanan -->
                        <div class="form-group">
                            <label for="jumlah">Jumlah Porsi</label>
                            <input type="number" id="jumlah" class="form-control" placeholder="Masukkan jumlah porsi" min="1" step="1" required>
                        </div>
                        <!-- Tombol pesan -->
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-block" id="pesan-btn">Pesan Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('pesan-btn').addEventListener('click', function() {
        var nama = document.getElementById('nama').value;
        var jumlah = document.getElementById('jumlah').value;
        var menu = "Ketupat Tahu Bumbu";

        // Validasi input jumlah porsi
        if (!Number.isInteger(Number(jumlah)) || jumlah <= 0) {
            alert('Mohon masukkan jumlah porsi yang valid.');
            return;
        }

        // URL encode untuk mencegah error karakter khusus
        var url = "https://wa.me/6285157996915?text=" + encodeURIComponent(
            "Saya " + nama + " ingin memesan " + menu + " sejumlah " + jumlah + " porsi."
        );

        // Redirect ke URL WhatsApp
        window.open(url, '_blank');
    });
</script>

<footer class="text-center">
    <p>&copy; 2024 Pemesanan Makanan</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
