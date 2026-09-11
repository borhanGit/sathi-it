<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'in:Software,Website,Marketing'],
            'client_name' => ['required', 'string', 'max:255'],
            'challenge' => ['required', 'string'],
            'solution' => ['required', 'string'],
            'result' => ['required', 'string'],
            'cover_image' => ['nullable', 'string', 'max:1000'],
            'live_url' => ['nullable', 'url', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
            'is_featured' => ['nullable', 'boolean'],
            'metric1_label' => ['nullable', 'string'],
            'metric1_val' => ['nullable', 'string'],
            'metric2_label' => ['nullable', 'string'],
            'metric2_val' => ['nullable', 'string'],
        ]);

        $metrics = [];
        if (!empty($validated['metric1_label']) && !empty($validated['metric1_val'])) {
            $metrics[] = ['label' => $validated['metric1_label'], 'value' => $validated['metric1_val']];
        }
        if (!empty($validated['metric2_label']) && !empty($validated['metric2_val'])) {
            $metrics[] = ['label' => $validated['metric2_label'], 'value' => $validated['metric2_val']];
        }

        Portfolio::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'category' => $validated['category'],
            'client_name' => $validated['client_name'],
            'challenge' => $validated['challenge'],
            'solution' => $validated['solution'],
            'result' => $validated['result'],
            'metrics' => $metrics,
            'cover_image' => $validated['cover_image'] ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
            'live_url' => $validated['live_url'],
            'is_featured' => $request->boolean('is_featured'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Case study created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'in:Software,Website,Marketing'],
            'client_name' => ['required', 'string', 'max:255'],
            'challenge' => ['required', 'string'],
            'solution' => ['required', 'string'],
            'result' => ['required', 'string'],
            'cover_image' => ['nullable', 'string', 'max:1000'],
            'live_url' => ['nullable', 'url', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
            'is_featured' => ['nullable', 'boolean'],
            'metric1_label' => ['nullable', 'string'],
            'metric1_val' => ['nullable', 'string'],
            'metric2_label' => ['nullable', 'string'],
            'metric2_val' => ['nullable', 'string'],
        ]);

        $metrics = [];
        if (!empty($validated['metric1_label']) && !empty($validated['metric1_val'])) {
            $metrics[] = ['label' => $validated['metric1_label'], 'value' => $validated['metric1_val']];
        }
        if (!empty($validated['metric2_label']) && !empty($validated['metric2_val'])) {
            $metrics[] = ['label' => $validated['metric2_label'], 'value' => $validated['metric2_val']];
        }

        $portfolio->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'client_name' => $validated['client_name'],
            'challenge' => $validated['challenge'],
            'solution' => $validated['solution'],
            'result' => $validated['result'],
            'metrics' => $metrics,
            'cover_image' => $validated['cover_image'] ?? $portfolio->cover_image,
            'live_url' => $validated['live_url'],
            'is_featured' => $request->boolean('is_featured'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Case study updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Case study deleted successfully.');
    }
}
