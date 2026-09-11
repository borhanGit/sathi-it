@extends('layouts.admin')

@section('title', 'Add New Service')
@section('page_title', 'Create Service Offering')

@section('content')

    <div class="max-w-3xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
        <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="title" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Service Title *</label>
                <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="e.g. Custom Software (BMS)" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label for="tagline" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Tagline / One-Liner</label>
                <input type="text" id="tagline" name="tagline" value="{{ old('tagline') }}" placeholder="e.g. Business management systems built around how you actually work." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="starting_price" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Starting Price (BDT Numeric) *</label>
                    <input type="number" id="starting_price" name="starting_price" required value="{{ old('starting_price', 10000) }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="price_unit" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Price Unit / Note</label>
                    <input type="text" id="price_unit" name="price_unit" value="{{ old('price_unit', 'BDT (Starter Module)') }}" placeholder="e.g. BDT / month" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div>
                <label for="short_desc" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Short Description (Preview Cards) *</label>
                <textarea id="short_desc" name="short_desc" rows="3" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('short_desc') }}</textarea>
            </div>

            <div>
                <label for="full_desc" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Full Detail Description</label>
                <textarea id="full_desc" name="full_desc" rows="6" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('full_desc') }}</textarea>
            </div>

            <div>
                <label for="features" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Key Features (One per line)</label>
                <textarea id="features" name="features" rows="4" placeholder="Inventory, sales, and order management&#10;Staff and task management tools&#10;Reporting dashboards" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('features') }}</textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="badge" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Highlight Badge (Optional)</label>
                    <input type="text" id="badge" name="badge" value="{{ old('badge') }}" placeholder="e.g. Operational Freedom" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="sort_order" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Sort Order</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 1) }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div class="flex items-center gap-2 pt-2">
                <input type="checkbox" id="is_active" name="is_active" value="1" checked class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                <label for="is_active" class="text-xs font-bold text-slate-700">Service Active & Visible on Website</label>
            </div>

            <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                <a href="{{ route('admin.services.index') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Cancel</a>
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Save Service
                </button>
            </div>
        </form>
    </div>

@endsection
