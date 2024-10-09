@extends('user.index')

@section('title', 'Menu Makanan')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Ketupat Tahu -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.radarcirebon.tv/wp-content/uploads/2023/04/Screenshot-631-e1680919298550.png" class="card-img-top" alt="Ketupat Tahu">
                <div class="card-body">
                    <h5 class="card-title">Ketupat Tahu</h5>
                    <p class="card-text">
                        Ketupat tahu adalah hidangan tradisional Indonesia yang terdiri dari potongan ketupat,
                        tahu goreng, dan disiram dengan bumbu kacang.
                    </p>
                    <a href="{{ url('ketupat') }}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>

        <!-- Nasi Tahu -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://t-2.tstatic.net/medan/foto/bank/images/resep-nasi-tahu.jpg" class="card-img-top" alt="Nasi Tahu">
                <div class="card-body">
                    <h5 class="card-title">Nasi Tahu</h5>
                    <p class="card-text">
                        Nasi tahu adalah hidangan sederhana khas Indonesia yang terdiri dari nasi putih dan tahu goreng, 
                        disajikan dengan bumbu kacang atau kecap manis.
                    </p>
                    <a href="{{ url('nasi') }}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>

        <!-- Tahu -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1449459374/id/foto/tahu-mentah-atau-tahu-putih.jpg?s=170667a&w=0&k=20&c=c4gXfJuw1TSw9J8PDakrVQZvcAjPUWzWImqh_wpw9Ac=" class="card-img-top" alt="Tahu">
                <div class="card-body">
                    <h5 class="card-title">Tahu</h5>
                    <p class="card-text">
                        Tahu adalah makanan yang bertekstur lembut dan kaya protein, 
                        tahu sering digunakan dalam berbagai masakan.
                    </p>
                    <a href="{{ url('tahu') }}" class="btn btn-primary  " target="_blank">Pesan</a>
                </div>
            </div>
        </div>

        <!-- Minuman -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://th.bing.com/th?id=OIP.QEATrX2-EwjKYeZ97aa0MwHaE6&w=306&h=203&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" class="card-img-top" alt="Minuman">
                <div class="card-body">
                    <h5 class="card-title">Minuman</h5>
                    <p class="card-text">
                        Minuman sederhana yang membuat tenggorokan segar.
                    </p>
                    <a href="{{ url('minuman') }}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        background-color: #fff; 
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        color: #343a40;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
    }

    .card-text {
        color: #6c757d;
        font-family: 'Roboto', sans-serif;
    }

    .btn-primary {
        background-color: #ff9800;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #e68a00;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .container::after {
        content: '';
        display: block;
        width: 50%;
        height: 5px;
        background-color: #ff9800;
        margin: 20px auto;
        border-radius: 10px;
    }

    .card-img-top {
        border-radius: 15px 15px 0 0;
        transition: transform 0.3s ease-in-out;
    }

    .card-img-top:hover {
        transform: scale(1.05);
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
</style>
@endsection
