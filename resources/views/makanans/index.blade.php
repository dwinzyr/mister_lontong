@extends('user.index')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Makanan</h1>
        <a href="{{ route('makanans.create') }}" class="btn btn-primary">Tambah Makanan</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Foto</th> <!-- Tambahkan kolom Foto -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->nama }}</td>
                    <td>{{ $makanan->deskripsi }}</td>
                    <td>Rp {{ number_format($makanan->harga, 2) }}</td>
                    <td>
                        @if ($makanan->foto)
                        <img src="{{ asset('storage/' . $makanan->foto) }}" alt="Foto {{ $makanan->nama }}" width="100">
                        @else
                            Tidak ada foto
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('makanans.edit', $makanan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('makanans.destroy', $makanan->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
    .table {
        border-radius: 15px;
        overflow: hidden;
        background-color: #fff;
        color: #343a40;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.7s ease-in-out;
    }

    .table thead {
        background-color: #D6EFD8;
        color: #343a40;
    }

    .table-hover tbody tr:hover {
        background-color: #e0f7fa;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        border-left: 5px solid #00796B; 
    }

    .table-hover tbody tr {
        transition: transform 0.3s ease;
    }

    .slide-in {
        transform: translateX(-100%);
        animation: slideIn 0.7s forwards;
    }
    @keyframes slideIn {
        to {
            transform: translateX(0);
        }
    }

    .btn-gradient {
        background: linear-gradient(to right, #ff9800, #e67e22);
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        color: white;
        border-radius: 50px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    }

    .btn-gradient:hover {
        transform: scale(1.05);
        background: linear-gradient(to right, #ff5722, #ff9800);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-warning {
        background-color: #f39c12;
        border-color: transparent;
    }

    .btn-warning:hover {
        background-color: #e67e22;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-danger {
        background-color: #e74c3c;
        border-color: transparent;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .btn i {
        margin-right: 5px;
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }

        .btn {
            margin-bottom: 10px;
        }
    }
</style>