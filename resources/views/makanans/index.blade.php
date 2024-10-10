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
