<?php

namespace App\Http\Controllers;

use App\Models\FooterSection;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    // Menampilkan semua section + link
    public function index()
    {
        $sections = FooterSection::with('links')->get();
        return response()->json($sections);
    }

    // Tambah section baru
    public function store(Request $request)
    {
        $section = FooterSection::create($request->only('title'));
        return response()->json($section, 201);
    }

    // Tambah link ke dalam section
    public function addLink(Request $request, $sectionId)
    {
        $section = FooterSection::findOrFail($sectionId);
        $link = $section->links()->create($request->only('title', 'url'));
        return response()->json($link, 201);
    }
}