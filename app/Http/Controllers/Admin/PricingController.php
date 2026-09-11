<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PricingController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::orderBy('sort_order')->get();
        return view('admin.pricing.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string', 'max:50'],
            'price_numeric' => ['nullable', 'numeric'],
            'billing_cycle' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features' => ['required', 'string'],
            'cta_text' => ['nullable', 'string', 'max:50'],
            'is_popular' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->input('features', ''))));

        PricingPlan::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'category' => $validated['category'],
            'price' => $validated['price'],
            'price_numeric' => $validated['price_numeric'],
            'billing_cycle' => $validated['billing_cycle'],
            'description' => $validated['description'],
            'features' => array_values($features),
            'cta_text' => $validated['cta_text'] ?? 'Get Consultation',
            'is_popular' => $request->boolean('is_popular'),
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing tier created successfully.');
    }

    public function edit(PricingPlan $pricing)
    {
        $plan = $pricing;
        return view('admin.pricing.edit', compact('plan'));
    }

    public function update(Request $request, PricingPlan $pricing)
    {
        $plan = $pricing;
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string', 'max:50'],
            'price_numeric' => ['nullable', 'numeric'],
            'billing_cycle' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features' => ['required', 'string'],
            'cta_text' => ['nullable', 'string', 'max:50'],
            'is_popular' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $features = array_filter(array_map('trim', explode("\n", $request->input('features', ''))));

        $plan->update([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'price' => $validated['price'],
            'price_numeric' => $validated['price_numeric'],
            'billing_cycle' => $validated['billing_cycle'],
            'description' => $validated['description'],
            'features' => array_values($features),
            'cta_text' => $validated['cta_text'] ?? $plan->cta_text,
            'is_popular' => $request->boolean('is_popular'),
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing tier updated successfully.');
    }

    public function destroy(PricingPlan $pricing)
    {
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing tier deleted successfully.');
    }
}
