@extends('user.index')

@section('title', 'Menu Makanan')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach($makanans as $makanan)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm card-hover">
                @if($makanan->foto)
                    <img src="{{ asset('storage/' . $makanan->foto) }}" class="card-img-top img-fluid rounded-top" alt="{{ $makanan->nama }}">
                @else
                    <img src="{{ asset('images/default-food.png') }}" class="card-img-top img-fluid rounded-top" alt="Foto tidak tersedia">
                @endif
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">{{ $makanan->nama }}</h5>
                    <p class="card-text text-muted text-center">
                        {{ Str::limit($makanan->deskripsi, 50) }}
                    </p>
                    <p class="card-text text-center font-weight-bold">
                        Harga: Rp {{ number_format($makanan->harga, 0, ',', '.') }}
                    </p>
                    <div class="text-center">
                        <a href="https://wa.me/6285157996915?text=Saya%20ingin%20memesan%20{{ urlencode($makanan->nama) }}%20sejumlah%201%20porsi." class="btn btn-success btn-block btn-pesan mt-3" target="_blank">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .container {
        max-width: 1140px;
        margin-top: 40px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .card-hover:hover {
        transform: translateY(-5px); 
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); 
    }

    .card-img-top {
        width: 100%;
        height: 200px; 
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .card-body {
        padding: 15px;
        text-align: center;
        background-color: #f9f9f9;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #00796B;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 0.85rem;
        color: #616161;
        margin-bottom: 10px;
    }

    .btn-pesan {
        border-radius: 25px;
        background: #ff9800;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-pesan:hover {
        transform: translateY(-3px);    
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        background-color: #ff5722;
    }

    .card-hover:hover .card-img-top {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .container {
            max-width: 100%;
        }

        .card-img-top {
            height: 140px;
        }

        .card-body {
            padding: 10px;
        }

        .btn-pesan {
            font-size: 0.9rem;
            padding: 8px 15px;
        }
    }
</style>
