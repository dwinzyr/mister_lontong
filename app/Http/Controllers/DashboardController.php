<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Middleware auth memastikan hanya user yang terautentikasi yang bisa mengakses
        $this->middleware('auth:web');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}