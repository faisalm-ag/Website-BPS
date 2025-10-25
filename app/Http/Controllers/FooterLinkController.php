<?php

namespace App\Http\Controllers;

use App\Models\FooterLink;
use App\Models\FooterSection; // <-- TAMBAHKAN INI
use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    /**
     * Redirect ke halaman index utama.
     */
    public function index()
    {
        return redirect()->route('admin.footers.index');
    }

    /**
     * Tampilkan form untuk membuat link baru.
     */
    public function create()
    {
        // Ambil semua section untuk jadi pilihan dropdown
        $sections = FooterSection::all();
        // Arahkan ke view 'footer_links/create' (BUKAN 'footers/create')
        return view('admin.footer_links.create', compact('sections'));
    }

    /**
     * Simpan link baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi 'section_id' (angka), bukan 'section' (teks)
        $request->validate([
            'section_id' => 'required|exists:footer_sections,id',
            'title'      => 'required|string|max:255',
            'url'        => 'required|url|max:255',
        ]);

        FooterLink::create($request->all());

        return redirect()->route('admin.footers.index')
            ->with('success', 'Link footer berhasil ditambahkan');
    }

    /**
     * Tampilkan form untuk mengedit link.
     */
    public function edit(FooterLink $footerLink)
    {
        // Ambil semua section untuk dropdown
        $sections = FooterSection::all();
        // Arahkan ke view 'footer_links/edit'
        return view('admin.footer_links.edit', compact('footerLink', 'sections'));
    }

    /**
     * Update link di database.
     */
    public function update(Request $request, FooterLink $footerLink)
    {
        // Validasi 'section_id' (angka), bukan 'section' (teks)
        $request->validate([
            'section_id' => 'required|exists:footer_sections,id',
            'title'      => 'required|string|max:255',
            'url'        => 'required|url|max:255',
        ]);

        $footerLink->update($request->all());

        return redirect()->route('admin.footers.index')
            ->with('success', 'Link footer berhasil diperbarui');
    }

    /**
     * Hapus link dari database.
     */
    public function destroy(FooterLink $footerLink)
    {
        $footerLink->delete();
        return redirect()->route('admin.footers.index')
            ->with('success', 'Link footer berhasil dihapus');
    }
}