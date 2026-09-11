<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $fields = [
            'site_name',
            'site_tagline',
            'site_email',
            'site_phone',
            'site_address',
            'hero_headline',
            'hero_subheadline',
            'hero_body',
            'cta_band_title',
            'cta_band_desc',
            'facebook_url',
            'linkedin_url',
            'whatsapp_number',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::set($field, $request->input($field));
            }
        }

        return redirect()->route('admin.settings.index')->with('success', 'Site settings updated successfully.');
    }
}
