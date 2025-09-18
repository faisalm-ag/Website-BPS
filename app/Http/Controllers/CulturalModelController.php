<?php

namespace App\Http\Controllers;

use App\Models\CulturalModel;
use Illuminate\Http\Request;

class CulturalModelController extends Controller
{
    // ========== PUBLIK ==========
    public function publicIndex()
    {
        $models = CulturalModel::all();
        return view('konsep.model', compact('models'));
    }

    // ========== ADMIN ==========
    public function index()
    {
        $models = CulturalModel::all();
        return view('admin.cultural_models.index', compact('models'));
    }

    public function create()
    {
        return view('admin.cultural_models.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'points' => 'nullable|string',
        ]);

        $validated['points'] = $validated['points'] 
            ? preg_split('/\r\n|\r|\n/', trim($validated['points'])) 
            : [];

        CulturalModel::create($validated);

        return redirect()->route('admin.cultural-models.index')
            ->with('success', 'Model implementasi berhasil ditambahkan.');
    }

    public function edit(CulturalModel $culturalModel)
    {
        return view('admin.cultural_models.edit', compact('culturalModel'));
    }

    public function update(Request $request, CulturalModel $culturalModel)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'points' => 'nullable|string',
        ]);

        $validated['points'] = $validated['points'] 
            ? preg_split('/\r\n|\r|\n/', trim($validated['points'])) 
            : [];

        $culturalModel->update($validated);

        return redirect()->route('admin.cultural-models.index')
            ->with('success', 'Model implementasi berhasil diperbarui.');
    }

    public function destroy(CulturalModel $culturalModel)
    {
        $culturalModel->delete();

        return redirect()->route('admin.cultural-models.index')
            ->with('success', 'Model implementasi berhasil dihapus.');
    }
}
