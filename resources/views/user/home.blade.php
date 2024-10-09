@extends('user.index')

@section('title', 'Home Page')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-white" style="background: linear-gradient(135deg, #6AC1B8 0%, #96CEB4 100%); padding: 4rem; border-radius: 15px; position: relative;">
        <div class="background-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background: url('/path/to/your/background-image.png') center/cover no-repeat;"></div>
        <h1 class="display-4 font-weight-bold" style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); z-index: 1; position: relative;">
            Selamat datang di <span style="color: #ffc107;">Mister Lontong!</span>
        </h1>
        <p class="lead" style="font-size: 1.2rem; z-index: 1; position: relative;">
            Rasakan sensasi Ketupat & Lontong sejati bersama Mister Lontong
        </p>
        <hr class="my-4" style="border-top: 2px solid rgba(255, 255, 255, 0.7); z-index: 1; position: relative;">
        <p style="z-index: 1; position: relative;">
            Kami menyediakan berbagai macam menu makanan yang siap menggoyang lidah Anda.
        </p>
        <a class="btn btn-warning btn-lg shadow-lg" href="{{ url('user') }}" role="button" 
           style="border-radius: 50px; transition: background-color 0.3s ease-in-out; z-index: 1; position: relative;">
            Lihat Menu
        </a>
    </div>
    <div class="row text-center mt-5">
    </div>
</div>
<style>
    .jumbotron {
        position: relative;
        overflow: hidden;
    }
    .jumbotron .background-image {
        background: url('your-image-url.png') no-repeat center center;
        opacity: 0.1;
    }
    
    .btn-warning:hover {
        background-color: #ffcc00;
        transform: scale(1.05);
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection

<style>
  body {
        background: linear-gradient(135deg, #6AC1B8 0%, #00796B 100%);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }
    </style>
