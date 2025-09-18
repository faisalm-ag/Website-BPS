<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanBudaya;
use Illuminate\Http\Request;

class PertanyaanBudayaController extends Controller
{
    public function publicIndex()
    {
        $pertanyaan = PertanyaanBudaya::all()->groupBy('kategori');
        return view('form.budaya', compact('pertanyaan'));
    }

    public function index()
    {
        $pertanyaan = PertanyaanBudaya::all();
        return view('admin.budaya.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('admin.budaya.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'nullable|string|max:255',
            'pertanyaan' => 'required|string',
        ]);

        PertanyaanBudaya::create($request->all());

        return redirect()->route('admin.budaya.index')
            ->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function edit(PertanyaanBudaya $budaya)
    {
        return view('admin.budaya.edit', compact('budaya'));
    }

    public function update(Request $request, PertanyaanBudaya $budaya)
    {
        $request->validate([
            'kategori' => 'nullable|string|max:255',
            'pertanyaan' => 'required|string',
        ]);

        $budaya->update($request->all());

        return redirect()->route('admin.budaya.index')
            ->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(PertanyaanBudaya $budaya)
    {
        $budaya->delete();

        return redirect()->route('admin.budaya.index')
            ->with('success', 'Pertanyaan berhasil dihapus');
    }
}
