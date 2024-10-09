<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f3f5; 
            font-family: 'Poppins', sans-serif;
        }

        .card {
            margin-top: 50px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
        }

        .card-header {
            background: linear-gradient(135deg,  #6AC1B8 0%, #96CEB4 100%); 
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            font-weight: bold;
            font-size: 18px;
        }

        .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #96CEB4; 
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        footer {
            margin-top: 20px;
        }

        footer p {
            color: #6c757d;
            font-size: 14px;
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
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Porsi</label>
                            <input type="number" id="jumlah" class="form-control" placeholder="Masukkan jumlah porsi" min="1" step="1" required>
                        </div>
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

<style>
  body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }
    </style>