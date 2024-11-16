@extends('user.index')

@section('title', 'Menu Makanan')

@section('content')
<div class="container mt-4">
    <!-- Keranjang Icon -->
    <div class="row mb-4">
        <div class="col text-right">
            <!-- Keranjang Icon -->
            <button class="btn keranjang-btn" data-toggle="modal" data-target="#keranjangModal">
                <i class="fa fa-shopping-cart"></i> <span id="jumlahKeranjang">0</span>
            </button>
        </div>
    </div>

    <!-- Modal Keranjang -->
    <div class="modal fade" id="keranjangModal" tabindex="-1" role="dialog" aria-labelledby="keranjangModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="keranjangModalLabel">Keranjang Belanja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="keranjangList">
                    <!-- Daftar Pesanan akan ditampilkan disini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-success" onclick="pesanSekarang()">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="menu-container">
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

                    <!-- Formulir Pemesanan -->
                    <button type="button" class="btn btn-success btn-block btn-pesan mt-3" onclick="tambahKeKeranjang({{ $makanan->id }}, '{{ $makanan->nama }}', {{ $makanan->harga }})">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Formulir Tambah Ke Keranjang -->
<div class="modal fade" id="tambahKeKeranjangModal" tabindex="-1" role="dialog" aria-labelledby="tambahKeKeranjangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKeKeranjangModalLabel">Pilih Opsi Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="orderForm">
                    <input type="hidden" id="makananId">
                    <input type="hidden" id="makananNama">
                    <input type="hidden" id="makananHarga">

                    <div class="form-group">
                        <label for="jumlahPorsi">Jumlah Porsi</label>
                        <select class="form-control" id="jumlahPorsi">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pedas">Pedas</label>
                        <select class="form-control" id="pedas">
                            <option value="Tidak Pedas">Tidak Pedas</option>
                            <option value="Pedas">Pedas</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="antar">Pengiriman</label>
                        <select class="form-control" id="antar">
                            <option value="Diantar">Diantar</option>
                            <option value="Diambil">Diambil</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="konfirmasiTambah()">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
</div>

<script>
    let keranjang = [];

    // Fungsi untuk membuka modal tambah ke keranjang
    function tambahKeKeranjang(makananId, nama, harga) {
        document.getElementById("makananId").value = makananId;
        document.getElementById("makananNama").value = nama;
        document.getElementById("makananHarga").value = harga;
        
        // Buka modal
        $('#tambahKeKeranjangModal').modal('show');
    }

    // Fungsi untuk konfirmasi penambahan ke keranjang
    function konfirmasiTambah() {
        const makananId = document.getElementById("makananId").value;
        const nama = document.getElementById("makananNama").value;
        const harga = parseInt(document.getElementById("makananHarga").value);
        const jumlah = parseInt(document.getElementById("jumlahPorsi").value);
        const pedas = document.getElementById("pedas").value;
        const antar = document.getElementById("antar").value;

        const item = {
            makananId,
            nama,
            harga,
            jumlah,
            pedas,
            antar,
            totalHarga: harga * jumlah
        };
        keranjang.push(item);

        document.getElementById("jumlahKeranjang").innerText = keranjang.length;
        updateKeranjangList();

        // Tutup modal
        $('#tambahKeKeranjangModal').modal('hide');
    }

    // Fungsi untuk memperbarui tampilan keranjang
    function updateKeranjangList() {
        const keranjangList = document.getElementById("keranjangList");
        keranjangList.innerHTML = "";

        keranjang.forEach((item, index) => {
            const div = document.createElement("div");
            div.classList.add("mb-3");
            div.innerHTML = ` 
                <strong>${item.nama}</strong> - ${item.jumlah} Porsi (Rp ${item.totalHarga.toLocaleString('id-ID')})
                <br>
                Pedas: ${item.pedas}, Pengiriman: ${item.antar}
                <button class="btn btn-danger btn-sm float-right" onclick="hapusDariKeranjang(${index})">Hapus</button>
                <button class="btn btn-warning btn-sm float-right mr-2" onclick="editKeranjang(${index})">Edit</button>
            `;
            keranjangList.appendChild(div);
        });
    }

    // Fungsi untuk mengedit item di keranjang
    function editKeranjang(index) {
        const item = keranjang[index];

        // Set nilai-nilai di modal edit
        document.getElementById("makananId").value = item.makananId;
        document.getElementById("makananNama").value = item.nama;
        document.getElementById("makananHarga").value = item.harga;
        document.getElementById("jumlahPorsi").value = item.jumlah;
        document.getElementById("pedas").value = item.pedas;
        document.getElementById("antar").value = item.antar;

        // Update tombol menjadi "Update Keranjang"
        const btn = document.querySelector('.btn-primary');
        btn.setAttribute('onclick', `updateKeranjangItem(${index})`);
        btn.textContent = 'Update Keranjang';

        // Buka modal
        $('#tambahKeKeranjangModal').modal('show');
    }

    // Fungsi untuk memperbarui item di keranjang
    function updateKeranjangItem(index) {
        const makananId = document.getElementById("makananId").value;
        const nama = document.getElementById("makananNama").value;
        const harga = parseInt(document.getElementById("makananHarga").value);
        const jumlah = parseInt(document.getElementById("jumlahPorsi").value);
        const pedas = document.getElementById("pedas").value;
        const antar = document.getElementById("antar").value;

        const item = {
            makananId,
            nama,
            harga,
            jumlah,
            pedas,
            antar,
            totalHarga: harga * jumlah
        };

        keranjang[index] = item;  // Update item di keranjang

        document.getElementById("jumlahKeranjang").innerText = keranjang.length;
        updateKeranjangList();

        // Tutup modal
        $('#tambahKeKeranjangModal').modal('hide');
    }

    // Fungsi untuk menghapus item dari keranjang
    function hapusDariKeranjang(index) {
        keranjang.splice(index, 1);
        document.getElementById("jumlahKeranjang").innerText = keranjang.length;
        updateKeranjangList();
    }

    // Fungsi untuk memesan melalui WhatsApp
    function pesanSekarang() {
        let text = "Saya ingin memesan:\n";
        keranjang.forEach(item => {
            text += `\n- ${item.nama} (${item.jumlah} porsi) ${item.pedas} - ${item.antar} - Rp ${item.totalHarga.toLocaleString('id-ID')}`;
        });

        // Kirim pesan ke WhatsApp
        window.open(`https://wa.me/6285157996915?text=${encodeURIComponent(text)}`, '_blank');

        // Setelah pesan dikirim, kosongkan keranjang
        keranjang = [];
        document.getElementById("jumlahKeranjang").innerText = keranjang.length;
        updateKeranjangList();
    }
</script>


@endsection

<style>
    /* Tambahkan link Font Awesome */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

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
    .keranjang-btn {
        background-color: transparent;
        border: none;
        color: #00796B;
        font-size: 2rem; 
        padding: 10px 15px;
        border-radius: 50%;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .keranjang-btn i {
        font-size: 2rem;
    }

    .keranjang-btn:hover {
        background-color: rgba(0, 121, 107, 0.1);
        color: #004d40;
    }

    .keranjang-btn span {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 0.2rem 0.5rem;
        font-size: 0.8rem;
    }

    .modal-content {
        border-radius: 10px;
    }

</style>
