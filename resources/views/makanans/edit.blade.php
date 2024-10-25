@extends('user.index')

@section('content')
    <h1 class="text-center mb-4">Edit Makanan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-lg mx-auto" style="max-width: 600px; border-radius: 15px; background-color: rgba(255, 255, 255, 0.8);">
        <form action="{{ route('makanans.update', $makanan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama" class="font-weight-bold">Nama Makanan</label>
                <input type="text" name="nama" class="form-control shadow-sm" id="nama" value="{{ $makanan->nama }}" style="border-radius: 10px;">
            </div>

            <div class="form-group">
                <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control shadow-sm" id="deskripsi" rows="3" style="border-radius: 10px;">{{ $makanan->deskripsi }}</textarea>
            </div>

            <div class="form-group">
                <label for="harga" class="font-weight-bold">Harga</label>
                <input type="number" name="harga" class="form-control shadow-sm" id="harga" value="{{ $makanan->harga }}" step="0.01" style="border-radius: 10px;">
            </div>

            <!-- Menampilkan foto yang sudah ada (jika ada) -->
            @if ($makanan->foto)
                <div class="form-group">
                    <label>Foto Saat Ini</label>
                    <br>
                    <img src="{{ asset('storage/' . $makanan->foto) }}" alt="Foto Makanan" width="150" class="rounded shadow-sm">
                </div>
            @endif

            <div class="form-group">
                <label for="foto" class="font-weight-bold">Ganti Foto</label>
                <input type="file" name="foto" class="form-control-file" id="foto">
            </div>

            <button type="submit" class="btn btn-primary btn-block shadow" style="border-radius: 25px; transition: background-color 0.3s;">Update</button>
        </form>
    </div>
@endsection

<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        font-family: 'Poppins', sans-serif;
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
    .form-control:focus {
        border-color: #ff9800;
        box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
    }

    .btn-primary:hover {
        background-color: #ff9800;
    }

    .btn-primary {
        background-color: #00796B;
        border: none;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.9);
        max-width: 600px; 
        width: 100%;
    }

    h1 {
        font-weight: bold;
        letter-spacing: 1.5px;
    }
</style>