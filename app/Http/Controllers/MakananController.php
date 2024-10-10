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
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        Makanan::create($request->all());

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
        ]);

        $makanan = Makanan::find($id);
        $makanan->update($request->all());

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
