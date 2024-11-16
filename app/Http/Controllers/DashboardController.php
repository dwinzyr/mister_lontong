<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        // Mendapatkan statistik pesanan harian dari session
        $dailyOrderCount = session()->get('dailyOrderCount', 0);
        $dailyIncome = session()->get('dailyIncome', 0);

        // Menampilkan statistik di dashboard admin
        return view('admin.dashboard', compact('dailyOrderCount', 'dailyIncome'));
    }

    public function order(Request $request)
    {
        // Ambil harga dan jumlah dari permintaan
        $hargaProduk = $request->input('harga');
        $jumlahPesanan = $request->input('jumlah', 1); 
    
        // Hitung total harga
        $totalHargaPesanan = $hargaProduk * $jumlahPesanan;
    
        // Tambahkan pesanan ke session untuk data harian
        $dailyOrderCount = session()->get('dailyOrderCount', 0) + $jumlahPesanan;
        $dailyIncome = session()->get('dailyIncome', 0) + $totalHargaPesanan;
    
        // Update session
        session()->put('dailyOrderCount', $dailyOrderCount);
        session()->put('dailyIncome', $dailyIncome);
    
        // Redirect ke WhatsApp dengan pesan otomatis
        $whatsappUrl = "https://wa.me/123456789?text=Pesanan%20baru%20dengan%20total%20harga%20Rp%20$totalHargaPesanan";
        
        return redirect()->away($whatsappUrl);
    }
    

}
