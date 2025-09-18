<?php

namespace App\Http\Controllers;

use App\Models\LeadBOIndicator;
use Illuminate\Http\Request;

class LeadBOIndicatorController extends Controller
{
    // FRONTEND
    public function publicIndex()
    {
        $leadbo = LeadBOIndicator::all();
        return view('indikator.leadbo', compact('leadbo'));
    }

    // ADMIN CRUD
    public function index()
    {
        $indicators = LeadBOIndicator::all();
        return view('admin.leadbo.index', compact('indicators'));
    }

    public function create()
    {
        return view('admin.leadbo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'color'   => 'required|string',
        ]);

        LeadBOIndicator::create($request->all());
        return redirect()->route('admin.leadbo.index')->with('success', 'Indikator berhasil ditambahkan.');
    }

    public function edit(LeadBOIndicator $leadbo)
    {
        return view('admin.leadbo.edit', compact('leadbo'));
    }

    public function update(Request $request, LeadBOIndicator $leadbo)
    {
        $request->validate([
            'content' => 'required|string',
            'color'   => 'required|string',
        ]);

        $leadbo->update($request->all());
        return redirect()->route('admin.leadbo.index')->with('success', 'Indikator berhasil diperbarui.');
    }

    public function destroy(LeadBOIndicator $leadbo)
    {
        $leadbo->delete();
        return redirect()->route('admin.leadbo.index')->with('success', 'Indikator berhasil dihapus.');
    }
}
