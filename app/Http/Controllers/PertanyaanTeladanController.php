<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanTeladan;
use Illuminate\Http\Request;

class PertanyaanTeladanController extends Controller
{
    // Public form
    public function publicIndex()
    {
        $pertanyaan = PertanyaanTeladan::all()->groupBy('kategori');
        return view('form.teladan', compact('pertanyaan'));
    }


    // Admin CRUD
    public function index()
    {
        $pertanyaan = PertanyaanTeladan::latest()->paginate(10);
        return view('admin.teladan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('admin.teladan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'pertanyaan' => 'required|string',
        ]);

        PertanyaanTeladan::create($request->all());
        return redirect()->route('admin.teladan.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function edit(PertanyaanTeladan $teladan)
    {
        return view('admin.teladan.edit', compact('teladan'));
    }

    public function update(Request $request, PertanyaanTeladan $teladan)
    {
        $request->validate(['pertanyaan' => 'required|string']);
        $teladan->update($request->all());
        return redirect()->route('admin.teladan.index')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroy(PertanyaanTeladan $teladan)
    {
        $teladan->delete();
        return redirect()->route('admin.teladan.index')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
