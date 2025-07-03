<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AdminController extends Controller
{
    // Show the add-buku page
    public function showAddBuku()
    {
        $kategoris = Kategori::all();
        return view('layouts.buku.add-buku', compact('kategoris'));
    }

    // Store new buku
    public function storeBuku(Request $request)
    {
        $validated = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'cover' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'th_terbit' => 'required|string|max:10',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
        \App\Models\Buku::create($validated);
        return redirect('/data-buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Edit buku
    public function editBuku($id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $kategoris = Kategori::all();
        return view('layouts.buku.edit-buku', compact('buku', 'kategoris'));
    }

    // Update buku
    public function updateBuku(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'cover' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'th_terbit' => 'required|string|max:10',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
        $buku = \App\Models\Buku::findOrFail($id);
        $buku->update($validated);
        return redirect('/data-buku')->with('success', 'Buku berhasil diupdate!');
    }

    // Delete buku
    public function deleteBuku($id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $buku->delete();
        return redirect('/data-buku')->with('success', 'Buku berhasil dihapus!');
    }

    // Show the add-agt page
    public function showAddAgt()
    {
        return view('layouts.agt.add-agt');
    }

    // Store new anggota
    public function storeAgt(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jekel' => 'required|in:Laki-laki,Perempuan',
            'kelas' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);
        \App\Models\Anggota::create($validated);
        return redirect('/data-agt')->with('success', 'Anggota berhasil ditambahkan!');
    }

    // Edit anggota
    public function editAgt($id)
    {
        $anggota = \App\Models\Anggota::findOrFail($id);
        return view('layouts.agt.edit-agt', compact('anggota'));
    }

    // Update anggota
    public function updateAgt(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jekel' => 'required|in:Laki-laki,Perempuan',
            'kelas' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->update($validated);
        return redirect('/data-agt')->with('success', 'Anggota berhasil diupdate!');
    }

    // Delete anggota
    public function deleteAgt($id)
    {
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/data-agt')->with('success', 'Anggota berhasil dihapus!');
    }
}
