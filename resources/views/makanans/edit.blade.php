@extends('user.index')

@section('content')
    <h1>Edit Makanan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('makanans.update', $makanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Makanan</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $makanan->nama }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ $makanan->deskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ $makanan->harga }}" step="0.01">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
