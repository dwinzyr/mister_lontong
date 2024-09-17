@extends('user.index')
@section('title', 'Admin')
@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong">
                    <div class="card-body text-center">
                        <div class="img-container mb-4">
                            <img src="{{ asset('images/lontong.jpg') }}" alt="Lontong Image" class="img-fluid rounded-circle" style="max-width: 150px;">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Username</label>
                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
