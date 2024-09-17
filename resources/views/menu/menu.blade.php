@extends('user.index')
@section('title', 'Menu Admin')
@section('content')
    <div class="container container-custom">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Tambah Menu Makanan</h2>
                        <form>
                            <div class="mb-3">
                                <label for="inputName" class="form-label">Nama Makanan</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Masukkan Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Stock Makanan</label>
                                <input type="email" class="form-control" id="inputStock" placeholder="Masukkan Stock" required>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="inputPhone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="inputPhone" placeholder="Masukkan Nomor Telepon" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Alamat</label>
                                <textarea class="form-control" id="inputAddress" rows="3" placeholder="Masukkan Alamat" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="inputDate" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="inputDate" required>
                            </div> -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection