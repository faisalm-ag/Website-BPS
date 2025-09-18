<?php

namespace App\Http\Controllers;

use App\Models\PeBOIndicator;
use Illuminate\Http\Request;

class PeBOIndicatorController extends Controller
{
    // FRONTEND
    public function publicIndex()
    {
        $indicators = PeBOIndicator::all();
        return view('indikator.pebo', compact('indicators'));
    }

    // ADMIN CRUD
    public function index()
    {
        $indicators = PeBOIndicator::all();
        return view('admin.pebo.index', compact('indicators'));
    }

    public function create()
    {
        return view('admin.pebo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'color'   => 'required|string',
        ]);

        PeBOIndicator::create($request->all());
        return redirect()->route('admin.pebo.index')->with('success', 'Indikator berhasil ditambahkan.');
    }

    public function edit(PeBOIndicator $pebo)
    {
        return view('admin.pebo.edit', compact('pebo'));
    }

    public function update(Request $request, PeBOIndicator $pebo)
    {
        $request->validate([
            'content' => 'required|string',
            'color'   => 'required|string',
        ]);

        $pebo->update($request->all());
        return redirect()->route('admin.pebo.index')->with('success', 'Indikator berhasil diperbarui.');
    }

    public function destroy(PeBOIndicator $pebo)
    {
        $pebo->delete();
        return redirect()->route('admin.pebo.index')->with('success', 'Indikator berhasil dihapus.');
    }
}
