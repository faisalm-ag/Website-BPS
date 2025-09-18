<?php

namespace App\Http\Controllers;

use App\Models\LegalBase;
use Illuminate\Http\Request;

class LegalBaseController extends Controller
{
    /**
     * Halaman publik: tampilkan daftar untuk Konsep → Dasar Hukum
     */
    public function publicIndex()
    {
        $legalBases = LegalBase::orderBy('id')->get();
        return view('konsep.dasar', compact('legalBases'));
    }

    /**
     * Admin: daftar data
     */
    public function index()
    {
        $legalBases = LegalBase::latest()->paginate(10);
        return view('admin.legal_bases.index', compact('legalBases'));
    }

    public function create()
    {
        $legalBase = new LegalBase();
        return view('admin.legal_bases.create', compact('legalBase'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:2000',
        ]);

        LegalBase::create($data);

        return redirect()->route('admin.legal-bases.index')
            ->with('success', 'Dasar hukum berhasil ditambahkan.');
    }

    public function edit(LegalBase $legal_base)
    {
        return view('admin.legal_bases.edit', ['legalBase' => $legal_base]);
    }

    public function update(Request $request, LegalBase $legal_base)
    {
        $data = $request->validate([
            'title' => 'required|string|max:2000',
        ]);

        $legal_base->update($data);

        return redirect()->route('admin.legal-bases.index')
            ->with('success', 'Dasar hukum berhasil diperbarui.');
    }

    public function destroy(LegalBase $legal_base)
    {
        $legal_base->delete();

        return redirect()->route('admin.legal-bases.index')
            ->with('success', 'Dasar hukum berhasil dihapus.');
    }
}
