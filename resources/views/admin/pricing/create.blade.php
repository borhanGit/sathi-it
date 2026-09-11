@extends('layouts.admin')

@section('title', 'Add Pricing Plan')
@section('page_title', 'Create Pricing Plan')

@section('content')

    <div class="max-w-3xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
        <form action="{{ route('admin.pricing.store') }}" method="POST" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label for="name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Package Name *</label>
                    <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="e.g. BMS Software (Starter)" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="category" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Category *</label>
                    <input type="text" id="category" name="category" required value="{{ old('category', 'Software') }}" placeholder="Software / Website" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="price" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Display Price *</label>
                    <input type="text" id="price" name="price" required value="{{ old('price', '৳10,000') }}" placeholder="৳10,000 or Custom Quote" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="billing_cycle" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Billing Cycle / Note *</label>
                    <input type="text" id="billing_cycle" name="billing_cycle" required value="{{ old('billing_cycle', 'Starting price') }}" placeholder="e.g. Monthly package / One-time" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div>
                <label for="description" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Short Description</label>
                <textarea id="description" name="description" rows="2" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="features" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Features List * (One item per line)</label>
                <textarea id="features" name="features" rows="6" required placeholder="Core single-module system&#10;Up to 3 user roles&#10;Data export to Excel" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('features') }}</textarea>
            </div>

            <div class="flex items-center gap-6 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-slate-700">
                    <input type="checkbox" name="is_popular" value="1" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    <span>Mark as Recommended / Popular</span>
                </label>
            </div>

            <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                <a href="{{ route('admin.pricing.index') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Cancel</a>
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Save Pricing Tier
                </button>
            </div>
        </form>
    </div>

@endsection
