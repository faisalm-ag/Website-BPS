<?php

namespace App\Http\Controllers;

use App\Models\FooterSection;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Menampilkan halaman daftar footer sections.
     */
    public function index()
    {
        $sections = FooterSection::with('links')->get();
        return view('admin.footers.index', ['sections' => $sections]);
    }

    /**
     * Menampilkan form untuk membuat section baru.
     */
    public function create()
    {
        // Mengarahkan ke view create section yang sudah ada
        return view('admin.footers.create');
    }

    /**
     * Menyimpan section baru.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        FooterSection::create($request->only('title'));
        
        // Redirect ke index, bukan JSON
        return redirect()->route('admin.footers.index')
                         ->with('success', 'Section baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit judul section.
     * $footer adalah objek FooterSection.
     */
    public function edit(FooterSection $footer)
    {
        // Mengarahkan ke view edit section yang sudah ada
        return view('admin.footers.edit', ['footer' => $footer]);
    }

    /**
     * Menyimpan perubahan judul section.
     */
    public function update(Request $request, FooterSection $footer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $footer->update([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.footers.index')
                         ->with('success', 'Judul section berhasil diperbarui.');
    }

    /**
     * Menghapus section (dan link di dalamnya via cascade).
     */
    public function destroy(FooterSection $footer)
    {
        // onDelete('cascade') di migrasi akan otomatis menghapus link
        $footer->delete();

        return redirect()->route('admin.footers.index')
                         ->with('success', 'Section berhasil dihapus.');
    }
}