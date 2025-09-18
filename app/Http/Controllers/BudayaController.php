<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanBudaya;
use App\Models\JawabanBudaya;
use Illuminate\Support\Facades\Auth;

class BudayaController extends Controller
{
    public function publicIndex()
    {
        $pertanyaan = PertanyaanBudaya::all()->groupBy('kategori');
        return view('form.budaya', compact('pertanyaan'));
    }

    public function index()
    {
        $jawaban = JawabanBudaya::with(['pertanyaan', 'user'])->get();
        return view('admin.budaya.index', compact('jawaban'));
    }

    public function create()
    {
        $pertanyaan = PertanyaanBudaya::all()->groupBy('kategori');
        return view('admin.budaya.create', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        foreach ($request->harapan as $kategori => $list) {
            foreach ($list as $index => $nilaiHarapan) {
                $nilaiKinerja = $request->kinerja[$kategori][$index] ?? null;

                JawabanBudaya::create([
                    'user_id' => $user->id,
                    'pertanyaan_id' => PertanyaanBudaya::where('kategori', $kategori)->skip($index - 1)->first()->id,
                    'nilai_harapan' => $nilaiHarapan,
                    'nilai_kinerja' => $nilaiKinerja,
                ]);
            }
        }

        return redirect()->route('budaya.index')->with('success', 'Penilaian berhasil disimpan.');
    }

    public function edit($id)
    {
        $jawaban = JawabanBudaya::findOrFail($id);
        return view('admin.budaya.edit', compact('jawaban'));
    }

    public function update(Request $request, $id)
    {
        $jawaban = JawabanBudaya::findOrFail($id);
        $jawaban->update($request->only(['nilai_harapan', 'nilai_kinerja']));
        return redirect()->route('budaya.index')->with('success', 'Jawaban berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jawaban = JawabanBudaya::findOrFail($id);
        $jawaban->delete();
        return redirect()->route('budaya.index')->with('success', 'Jawaban berhasil dihapus.');
    }
}
