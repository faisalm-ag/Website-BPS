<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        $winners = Winner::latest()->get();
        return view('admin.winners.index', compact('winners'));
    }

    public function create()
    {
        return view('admin.winners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'period' => 'nullable|string|max:255',
            'announced_at' => 'nullable|date',
        ]);

        Winner::create($request->all());

        return redirect()->route('admin.winners.index')
            ->with('success', 'Pemenang berhasil ditambahkan');
    }

    public function edit(Winner $winner)
    {
        return view('admin.winners.edit', compact('winner'));
    }

    public function update(Request $request, Winner $winner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'period' => 'nullable|string|max:255',
            'announced_at' => 'nullable|date',
        ]);

        $winner->update($request->all());

        return redirect()->route('admin.winners.index')
            ->with('success', 'Pemenang berhasil diperbarui');
    }

    public function destroy(Winner $winner)
    {
        $winner->delete();
        return redirect()->route('admin.winners.index')
            ->with('success', 'Pemenang berhasil dihapus');
    }
}
