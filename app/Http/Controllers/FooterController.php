<?php

namespace App\Http\Controllers;

use App\Models\FooterSection;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Menampilkan halaman daftar footer sections dalam format HTML.
     * Ini adalah fungsi yang diperbaiki.
     */
    public function index()
    {
        // 1. Ambil semua data section beserta link-link di dalamnya
        $sections = FooterSection::with('links')->get();

        // 2. Kirim data tersebut ke sebuah "view" (template Blade) untuk ditampilkan
        //    File view ini harus ada di: resources/views/admin/footers/index.blade.php
        return view('admin.footers.index', ['sections' => $sections]);
    }

    /**
     * Menyimpan section baru yang dikirim melalui API.
     * Fungsi ini (dan fungsi di bawahnya) sengaja dibiarkan mengembalikan JSON
     * karena biasanya digunakan untuk proses di belakang layar (misal: via AJAX).
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        $section = FooterSection::create($request->only('title'));
        return response()->json($section, 201);
    }

    /**
     * Menambahkan link baru ke dalam section yang ada melalui API.
     */
    public function addLink(Request $request, $sectionId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url'   => 'required|url',
        ]);

        $section = FooterSection::findOrFail($sectionId);
        $link = $section->links()->create($request->only('title', 'url'));
        return response()->json($link, 201);
    }
}