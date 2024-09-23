@extends('user.index')

@section('title', 'Menu Makanan')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.radarcirebon.tv/wp-content/uploads/2023/04/Screenshot-631-e1680919298550.png" class="card-img-top" alt="Ketupat Tahu">
                <div class="card-body">
                    <h5 class="card-title">Ketupat Tahu</h5>
                    <p class="card-text">
                    Ketupat tahu adalah hidangan tradisional Indonesia yang terdiri dari potongan ketupat,
                    tahu goreng, dan disiram dengan bumbu kacang. 
                    </p>
                    <a href="{{url('ketupat')}}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://t-2.tstatic.net/medan/foto/bank/images/resep-nasi-tahu.jpg" class="card-img-top" alt="Nasi Tahu">
                <div class="card-body">
                    <h5 class="card-title">Nasi Tahu</h5>
                    <p class="card-text">
                    Nasi tahu adalah hidangan sederhana khas Indonesia yang terdiri dari nasi putih dan tahu goreng, 
                    disajikan dengan bumbu kacang atau kecap manis. 
                    </p>
                    <a href="{{url('nasi')}}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1449459374/id/foto/tahu-mentah-atau-tahu-putih.jpg?s=170667a&w=0&k=20&c=c4gXfJuw1TSw9J8PDakrVQZvcAjPUWzWImqh_wpw9Ac=" class="card-img-top" alt="Tahu">
                <div class="card-body">
                    <h5 class="card-title">Tahu</h5>
                    <p class="card-text">
                    Tahu adalah makanan yang Bertekstur lembut dan kaya protein, 
                    tahu sering digunakan dalam berbagai masakan.
                    </p>
                    <a href="{{url('tahu')}}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://th.bing.com/th?id=OIP.QEATrX2-EwjKYeZ97aa0MwHaE6&w=306&h=203&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" class="card-img-top" alt="Minuman">
                <div class="card-body">
                    <h5 class="card-title">Minuman</h5>
                    <p class="card-text">
                    Minuman sederhana yang membuat tenggorokan segar
                    </p>
                    <a href="{{url('minuman')}}" class="btn btn-primary" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
