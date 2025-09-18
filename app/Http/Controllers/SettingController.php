<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_title'  => 'nullable|string|max:255',
            'footer_text' => 'nullable|string|max:255',
            'logo'        => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $data = $request->only('site_title', 'footer_text');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Setting::create($data);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil disimpan');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'site_title'  => 'nullable|string|max:255',
            'footer_text' => 'nullable|string|max:255',
            'logo'        => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $data = $request->only('site_title', 'footer_text');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $setting->update($data);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil diperbarui');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil dihapus');
    }
}
