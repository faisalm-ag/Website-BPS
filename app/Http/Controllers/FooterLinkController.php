<?php

namespace App\Http\Controllers;

use App\Models\FooterLink;
use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    public function index()
    {
        $footerLinks = FooterLink::all();
        return view('admin.footer_links.index', compact('footerLinks'));
    }

    public function create()
    {
        return view('admin.footer_links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|string|max:255',
            'title'   => 'required|string|max:255',
            'url'     => 'required|string|max:255',
        ]);

        FooterLink::create($request->all());

        return redirect()->route('admin.footer-links.index')
            ->with('success', 'Link footer berhasil ditambahkan');
    }

    public function edit(FooterLink $footerLink)
    {
        return view('admin.footer_links.edit', compact('footerLink'));
    }

    public function update(Request $request, FooterLink $footerLink)
    {
        $request->validate([
            'section' => 'required|string|max:255',
            'title'   => 'required|string|max:255',
            'url'     => 'required|string|max:255',
        ]);

        $footerLink->update($request->all());

        return redirect()->route('admin.footer-links.index')
            ->with('success', 'Link footer berhasil diperbarui');
    }

    public function destroy(FooterLink $footerLink)
    {
        $footerLink->delete();
        return redirect()->route('admin.footer-links.index')
            ->with('success', 'Link footer berhasil dihapus');
    }
}
