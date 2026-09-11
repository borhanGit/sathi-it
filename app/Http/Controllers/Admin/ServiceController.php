<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:50'],
            'short_desc' => ['required', 'string'],
            'full_desc' => ['nullable', 'string'],
            'features' => ['nullable', 'string'], // newline separated in form
            'starting_price' => ['required', 'numeric', 'min:0'],
            'price_unit' => ['nullable', 'string', 'max:100'],
            'badge' => ['nullable', 'string', 'max:50'],
            'sort_order' => ['nullable', 'integer'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->input('features', ''))));

        Service::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'tagline' => $validated['tagline'],
            'icon' => $validated['icon'] ?? 'code',
            'short_desc' => $validated['short_desc'],
            'full_desc' => $validated['full_desc'],
            'features' => array_values($features),
            'starting_price' => $validated['starting_price'],
            'price_unit' => $validated['price_unit'] ?? 'BDT',
            'badge' => $validated['badge'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:50'],
            'short_desc' => ['required', 'string'],
            'full_desc' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'starting_price' => ['required', 'numeric', 'min:0'],
            'price_unit' => ['nullable', 'string', 'max:100'],
            'badge' => ['nullable', 'string', 'max:50'],
            'sort_order' => ['nullable', 'integer'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->input('features', ''))));

        $service->update([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'icon' => $validated['icon'] ?? $service->icon,
            'short_desc' => $validated['short_desc'],
            'full_desc' => $validated['full_desc'],
            'features' => array_values($features),
            'starting_price' => $validated['starting_price'],
            'price_unit' => $validated['price_unit'] ?? $service->price_unit,
            'badge' => $validated['badge'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
