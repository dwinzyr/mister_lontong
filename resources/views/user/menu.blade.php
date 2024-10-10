

@section('content')
<div class="container mt-4">
@extends('user.index')

@section('title', 'Menu Makanan')

<div class="container mt-4">
    <div class="row">
        @foreach($makanans as $makanan)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="" class="card-img-top" alt="{{ $makanan->nama }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $makanan->nama }}</h5>
                    <p class="card-text">
                        {{ $makanan->deskripsi }}
                    </p>
                    <p class="card-text">
                        Harga: Rp {{ number_format($makanan->harga, 0, ',', '.') }}
                    </p>
                    <a href="https://wa.me/6281234567890?text=Saya%20ingin%20memesan%20{{ urlencode($makanan->nama) }}%20sejumlah%201%20porsi." class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
        </div>

        <!-- Nasi Tahu -->
        
    </div>
</div>
<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        background-color: #fff; 
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        color: #343a40;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
    }

    .card-text {
        color: #6c757d;
        font-family: 'Roboto', sans-serif;
    }

    .btn-primary {
        background-color: #ff9800;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #e68a00;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .container::after {
        content: '';
        display: block;
        width: 50%;
        height: 5px;
        background-color: #ff9800;
        margin: 20px auto;
        border-radius: 10px;
    }

    .card-img-top {
        border-radius: 15px 15px 0 0;
        transition: transform 0.3s ease-in-out;
    }

    .card-img-top:hover {
        transform: scale(1.05);
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
</style>
@endsection
