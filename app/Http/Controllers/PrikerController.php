<?php

namespace App\Http\Controllers;

use App\Models\Priker;
use Illuminate\Http\Request;

class PrikerController extends Controller
{
    public function publicIndex()
    {
        $prikers = Priker::all();
        return view('indikator.priker', compact('prikers'));
    }

    public function index()
    {
        $prikers = Priker::all();
        return view('admin.priker.index', compact('prikers'));
    }

    public function create()
    {
        return view('admin.priker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'warna' => 'required|string|max:50',
        ]);

        Priker::create($request->all());
        return redirect()->route('admin.priker.index')->with('success', 'Indikator berhasil ditambahkan');
    }

    public function edit(Priker $priker)
    {
        return view('admin.priker.edit', compact('priker'));
    }

    public function update(Request $request, Priker $priker)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'warna' => 'required|string|max:50',
        ]);

        $priker->update($request->all());
        return redirect()->route('admin.priker.index')->with('success', 'Indikator berhasil diperbarui');
    }

    public function destroy(Priker $priker)
    {
        $priker->delete();
        return redirect()->route('admin.priker.index')->with('success', 'Indikator berhasil dihapus');
    }
}
