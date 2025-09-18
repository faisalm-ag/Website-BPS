<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    // untuk user publik (lihat saja)
    public function publicIndex()
    {
        $fotos = Foto::all();
        return view('galeri.foto', compact('fotos'));
    }

    // untuk admin (CRUD)
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

    public function edit(Foto $foto)
    {
        return view('admin.galeri.edit', compact('foto'));
    }

    public function update(Request $request, Foto $foto)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = ['nama' => $request->nama];

        if ($request->hasFile('file')) {
            // hapus file lama
            if ($foto->file && Storage::disk('public')->exists($foto->file)) {
                Storage::disk('public')->delete($foto->file);
            }
            $data['file'] = $request->file('file')->store('foto', 'public');
        }

        $foto->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(Foto $foto)
    {
        if ($foto->file && Storage::disk('public')->exists($foto->file)) {
            Storage::disk('public')->delete($foto->file);
        }
        $foto->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus');
    }
}
