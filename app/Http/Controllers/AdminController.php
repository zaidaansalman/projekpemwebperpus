<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Sirkulasi;

class AdminController extends Controller
{
    // Show the add-buku page
    public function showAddBuku()
    {
        $books = Buku::all();
        return view('layouts.buku.add-buku', compact('books'));
    }

    // Store new buku
    public function storeBuku(Request $request)
    {
        $validated = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'th_terbit' => 'required|string|max:10',
            'kategori' => 'required|in:Fiksi,Nonfiksi',
        ]);

        // Handle file upload
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('covers', $filename, 'public');
            $validated['cover'] = $path;
        }

        \App\Models\Buku::create($validated);
        return redirect('/data-buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Edit buku
    public function editBuku($id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        // No more kategoris, only pass buku
        return view('layouts.buku.edit-buku', compact('buku'));
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
            'kategori' => 'required|in:Fiksi,Nonfiksi',
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

    // Store new pengguna
    public function storePengguna(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
            'level' => 'required|in:Admin,Anggota',
        ]);
        \App\Models\User::create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['level'],
            'name' => $validated['username'],
        ]);
        return redirect('/data-pengguna')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    // Edit pengguna
    public function editPengguna($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('layouts.pengguna.edit-pengguna', compact('user'));
    }

    // Update pengguna
    public function updatePengguna(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:6',
            'role' => 'required|string',
        ]);
        $user = \App\Models\User::findOrFail($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->username = $validated['username'];
        $user->role = $validated['role'];
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }
        $user->save();
        return redirect('/data-pengguna')->with('success', 'Pengguna berhasil diupdate!');
    }

    // Delete pengguna
    public function deletePengguna($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect('/data-pengguna')->with('success', 'Pengguna berhasil dihapus!');
    }

    // Dashboard
    public function dashboard()
    {
        $bukuCount = Buku::count();
        $anggotaCount = Anggota::count();
        $sirkulasiCount = Sirkulasi::where('status', 'Dipinjam')->count(); // sirkulasi berjalan
        $laporanCount = Sirkulasi::where('status', 'Dikembalikan')->count(); // laporan sirkulasi (sudah kembali)
        return view('layouts.dashboard-admin', compact('bukuCount', 'anggotaCount', 'sirkulasiCount', 'laporanCount'));
    }
}
