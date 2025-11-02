<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    // ... (fungsi publicIndex dan index tidak berubah) ...
    public function publicIndex()
    {
        $fotos = Foto::all();
        return view('galeri.foto', compact('fotos'));
    }

    public function index()
    {
        $fotos = Foto::all();
        return view('admin.galeri.index', compact('fotos'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        // ... (fungsi store tidak berubah) ...
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('file')->store('foto', 'public');

        Foto::create([
            'nama' => $request->nama,
            'file' => $path,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil ditambahkan');
    }

    // UBAH DI SINI: dari (Foto $foto) -> (Foto $galeri)
    public function edit(Foto $galeri)
    {
        // View Anda mengharapkan variabel 'foto', jadi kita kirim
        // $galeri sebagai 'foto'
        return view('admin.galeri.edit', ['foto' => $galeri]);
    }

    // UBAH DI SINI: dari (Foto $foto) -> (Foto $galeri)
    public function update(Request $request, Foto $galeri)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = ['nama' => $request->nama];

        if ($request->hasFile('file')) {
            // hapus file lama
            if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
                Storage::disk('public')->delete($galeri->file);
            }
            $data['file'] = $request->file('file')->store('foto', 'public');
        }

        // Gunakan $galeri untuk update
        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil diperbarui');
    }

    // UBAH DI SINI: dari (Foto $foto) -> (Foto $galeri)
    public function destroy(Foto $galeri)
    {
        if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
            Storage::disk('public')->delete($galeri->file);
        }
        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus');
    }
}