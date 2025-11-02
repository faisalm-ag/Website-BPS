<?php

namespace App\Http\Controllers;

use App\Models\Foto; // Pastikan model ini benar
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Tampilkan galeri foto untuk publik.
     */
    public function publicIndex()
    {
        $fotos = Foto::all();
        // Debug info
        \Log::info('Loaded photos:', $fotos->map(function($foto) {
            return [
                'id' => $foto->id,
                'nama' => $foto->nama,
                'file' => $foto->file,
                'full_path' => storage_path('app/public/' . $foto->file),
                'exists' => file_exists(storage_path('app/public/' . $foto->file))
            ];
        })->toArray());
        
        return view('galeri.foto', compact('fotos'));
    }

    /**
     * Tampilkan daftar foto di panel admin.
     */
    public function index()
    {
        $fotos = Foto::all();
        return view('admin.galeri.index', compact('fotos'));
    }

    /**
     * Tampilkan form untuk membuat foto baru.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Simpan foto baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            // Simpan file dengan nama asli
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $path = $file->storeAs('foto', $fileName, 'public');
            
            // Log informasi penyimpanan
            \Log::info('File upload attempt', [
                'original_name' => $fileName,
                'stored_path' => $path,
                'full_path' => storage_path('app/public/' . $path)
            ]);

            // Cek apakah file berhasil disimpan
            if (!Storage::disk('public')->exists($path)) {
                throw new \Exception('File gagal disimpan ke storage');
            }

            $foto = Foto::create([
                'nama' => $request->nama,
                'file' => $path,
            ]);

            return redirect()
                ->route('admin.galeri.index')
                ->with('success', 'Foto berhasil ditambahkan');

        } catch (\Exception $e) {
            \Log::error('Error uploading file: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Gagal mengupload foto: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Tampilkan form untuk mengedit foto.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\View\View
     */
    public function edit(Foto $foto) // DIUBAH: Menggunakan Route Model Binding
    {
        // Tidak perlu findOrFail, Laravel sudah otomatis inject $foto
        return view('admin.galeri.edit', compact('foto'));
    }

    /**
     * Update foto di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Foto $foto) // DIUBAH: Menggunakan Route Model Binding
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // file boleh null saat update
        ]);

        // Tidak perlu findOrFail, $foto sudah di-inject dari parameter
        $data = ['nama' => $request->nama];

        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($foto->file && Storage::disk('public')->exists($foto->file)) {
                Storage::disk('public')->delete($foto->file);
            }
            // Simpan file baru
            $data['file'] = $request->file('file')->store('foto', 'public');
        }

        $foto->update($data); // Update model $foto yang sudah di-inject

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil diperbarui');
    }

    /**
     * Hapus foto dari database.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Foto $foto) // DIUBAH: Menggunakan Route Model Binding
    {
        // Tidak perlu findOrFail, $foto sudah di-inject dari parameter

        // Hapus file dari storage
        if ($foto->file && Storage::disk('public')->exists($foto->file)) {
            Storage::disk('public')->delete($foto->file);
        }
        
        // Hapus data dari database
        $foto->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus');
    }
}