@extends('user.index')

@section('content')
    <div class="container py-5">
        <div class="card shadow-lg rounded">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Detail Makanan: <strong>{{ $makanan->nama }}</strong></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Deskripsi:</strong></p>
                        <p>{{ $makanan->deskripsi }}</p>
                        <p><strong>Harga:</strong> <span class="text-success">Rp {{ number_format($makanan->harga, 2) }}</span></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p><strong>Foto:</strong></p>
                        @if ($makanan->foto)
                            <img src="{{ asset('storage/' . $makanan->foto) }}" alt="Foto {{ $makanan->nama }}" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                        @else
                            <p class="text-muted">Tidak ada foto</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('makanans.index') }}" class="btn btn-primary btn-gradient">Kembali</a>
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        font-family: 'Poppins', sans-serif;
    }

    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background-color: #fff;
    }

    .card-header {
        border-bottom: 3px solid #0056b3;
    }

    .btn-gradient {
        background: linear-gradient(to right, #007bff, #0056b3);
        color: #fff;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-gradient:hover {
        background: linear-gradient(to right, #0056b3, #007bff);
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .text-success {
        font-weight: bold;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
    }
</style>
