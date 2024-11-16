@extends('user.index')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-primary">Daftar Makanan</h1>
            <a href="{{ route('makanans.create') }}" class="btn btn-primary btn-gradient">Tambah Makanan</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-hover align-middle shadow-sm rounded">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Nama</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($makanans as $makanan)
                        <tr class="align-middle">
                            <td>{{ $makanan->nama }}</td>
                            <td class="text-center">
                                <a href="{{ route('makanans.show', $makanan->id) }}" class="btn btn-info btn-sm rounded-pill px-3">Lihat Detail</a>
                                <a href="{{ route('makanans.edit', $makanan->id) }}" class="btn btn-warning btn-sm rounded-pill px-3">Edit</a>
                                <form action="{{ route('makanans.destroy', $makanan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        color: #333;
        font-family: 'Poppins', sans-serif;
    }

    .table {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead {
        background: linear-gradient(to right, #007bff, #0056b3);
    }

    .table-hover tbody tr:hover {
        background-color: #f1f8ff;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-gradient {
        background: linear-gradient(to right, #007bff, #00b4d8);
        color: #fff;
        border: none;
        transition: all 0.3s;
    }

    .btn-gradient:hover {
        background: linear-gradient(to right, #0056b3, #007bff);
        transform: translateY(-2px);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-warning {
        background-color: #f39c12;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e67e22;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
