<?php

namespace App\Http\Controllers;

use App\Models\Sysbo;
use Illuminate\Http\Request;

class SysboController extends Controller
{
    // FRONTEND
    public function publicIndex()
    {
        $sysbos = Sysbo::all();
        return view('indikator.sysbo', compact('sysbos'));
    }

    // ADMIN CRUD
    public function index()
    {
        $sysbos = Sysbo::all();
        return view('admin.sysbo.index', compact('sysbos'));
    }

    public function create()
    {
        return view('admin.sysbo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'indikator' => 'required|string',
            'color'     => 'required|string',
        ]);

        Sysbo::create($request->all());
        return redirect()->route('admin.sysbo.index')->with('success', 'Indikator berhasil ditambahkan.');
    }

    public function edit(Sysbo $sysbo)
    {
        return view('admin.sysbo.edit', compact('sysbo'));
    }

    public function update(Request $request, Sysbo $sysbo)
    {
        $request->validate([
            'indikator' => 'required|string',
            'color'     => 'required|string',
        ]);

        $sysbo->update($request->all());
        return redirect()->route('admin.sysbo.index')->with('success', 'Indikator berhasil diperbarui.');
    }

    public function destroy(Sysbo $sysbo)
    {
        $sysbo->delete();
        return redirect()->route('admin.sysbo.index')->with('success', 'Indikator berhasil dihapus.');
    }
}
