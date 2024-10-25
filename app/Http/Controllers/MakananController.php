<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanans.index', compact('makanans'));
    }

    public function create()
    {
        return view('makanans.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Buat objek Makanan baru
        $makanan = new Makanan();
        $makanan->nama = $request->input('nama');
        $makanan->deskripsi = $request->input('deskripsi');
        $makanan->harga = $request->input('harga');
    
        // Simpan foto jika ada
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto', 'public'); 
            $makanan->foto = $fotoPath; // Simpan path ke kolom foto di database
        }
    
        $makanan->save(); // Simpan data makanan ke database
    
        return redirect()->route('makanans.index')
                         ->with('success', 'Makanan berhasil ditambahkan.');
    }
    

     
    public function edit($id)
    {
        $makanan = Makanan::find($id);
        return view('makanans.edit', compact('makanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Ambil data makanan yang akan diperbarui
        $makanan = Makanan::findOrFail($id);
        $makanan->nama = $request->input('nama');
        $makanan->deskripsi = $request->input('deskripsi');
        $makanan->harga = $request->input('harga');
    
        // Simpan foto baru jika ada
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto', 'public'); 
            $makanan->foto = $fotoPath; // Update path foto di database
        }
    
        $makanan->save(); // Simpan perubahan
    
        return redirect()->route('makanans.index')
                         ->with('success', 'Makanan berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
        Makanan::find($id)->delete();
        return redirect()->route('makanans.index')
                         ->with('success', 'Makanan berhasil dihapus.');
    }
    public function menu()
    {
        $makanans = Makanan::all(); // Or however you're fetching the data
        return view('user.menu', compact('makanans'));
    }
    
}


