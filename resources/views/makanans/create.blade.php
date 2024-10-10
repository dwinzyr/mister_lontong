@extends('user.index') {{-- Assuming there's a layout file --}}

@section('content')
    <h1>Tambah Makanan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('makanans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Makanan</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama makanan">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi makanan"></textarea>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" step="0.01" placeholder="Harga makanan">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
