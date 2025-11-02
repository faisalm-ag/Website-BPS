<?php

namespace App\Http\Controllers;

use App\Models\Foto; // Pastikan ini ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    // ... (fungsi publicIndex, index, create, store Anda sudah benar, tidak diubah) ...

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

    // --- [MULAI PERUBAHAN DI SINI] ---

    /**
     * Tampilkan form untuk mengedit foto.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) // UBAH: Terima $id, bukan (Foto $foto)
    {
        // TAMBAH: Cari foto secara manual.
        // findOrFail akan otomatis 404 jika ID tidak ada.
        $foto = Foto::findOrFail($id); 

        // Kirim $foto yang sudah ditemukan ke view.
        return view('admin.galeri.edit', compact('foto'));
    }

    /**
     * Update foto di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) // UBAH: Terima $id, bukan (Foto $foto)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // TAMBAH: Cari foto yang mau di-update secara manual
        $foto = Foto::findOrFail($id);

        $data = ['nama' => $request->nama];

        if ($request->hasFile('file')) {
            // hapus file lama
            if ($foto->file && Storage::disk('public')->exists($foto->file)) {
                Storage::disk('public')->delete($foto->file);
            }
            $data['file'] = $request->file('file')->store('foto', 'public');
        }

        // $foto dari findOrFail di-update
        $foto->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil diperbarui');
    }

    /**
     * Hapus foto dari database.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id) // UBAH: Terima $id, bukan (Foto $foto)
    {
        // TAMBAH: Cari foto yang mau dihapus secara manual
        $foto = Foto::findOrFail($id);

        if ($foto->file && Storage::disk('public')->exists($foto->file)) {
            Storage::disk('public')->delete($foto->file);
        }
        
        // $foto dari findOrFail dihapus
        $foto->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus');
    }
    
    // --- [AKHIR PERUBAHAN] ---
}
