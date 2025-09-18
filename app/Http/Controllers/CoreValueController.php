<?php

namespace App\Http\Controllers;

use App\Models\CoreValue;
use Illuminate\Http\Request;

class CoreValueController extends Controller
{
    // PUBLIK
    public function publicIndex()
    {
        $values = CoreValue::all();
        return view('konsep.nilai', compact('values'));
    }

    // ADMIN
    public function index()
    {
        $values = CoreValue::all();
        return view('admin.core_values.index', compact('values'));
    }

    public function create()
    {
        return view('admin.core_values.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'items' => 'nullable|string',
        ]);

        // Ubah items jadi array (pisah per baris)
        $validated['items'] = $validated['items'] 
            ? preg_split('/\r\n|\r|\n/', trim($validated['items'])) 
            : [];

        CoreValue::create($validated);

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil ditambahkan.');
    }

    public function edit(CoreValue $coreValue)
    {
        return view('admin.core_values.edit', compact('coreValue'));
    }

    public function update(Request $request, CoreValue $coreValue)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'items' => 'nullable|string',
        ]);

        // Ubah items jadi array (pisah per baris)
        $validated['items'] = $validated['items'] 
            ? preg_split('/\r\n|\r|\n/', trim($validated['items'])) 
            : [];

        $coreValue->update($validated);

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil diperbarui.');
    }

    public function destroy(CoreValue $coreValue)
    {
        $coreValue->delete();

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil dihapus.');
    }
}
