@extends('layouts.admin')

@section('title', 'Add Case Study')
@section('page_title', 'Create Client Case Study')

@section('content')

    <div class="max-w-3xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
        <form action="{{ route('admin.portfolios.store') }}" method="POST" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label for="title" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Case Study Title *</label>
                    <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="e.g. Prime Logistics BMS & Fleet Manager" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="category" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Category *</label>
                    <select id="category" name="category" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm bg-white">
                        <option value="Software">Software</option>
                        <option value="Website">Website</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="client_name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Client / Company Name *</label>
                    <input type="text" id="client_name" name="client_name" required value="{{ old('client_name') }}" placeholder="e.g. Prime Express Logistics" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="live_url" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Live Website / Demo URL</label>
                    <input type="url" id="live_url" name="live_url" value="{{ old('live_url') }}" placeholder="https://example.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div>
                <label for="cover_image" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Cover Image URL</label>
                <input type="url" id="cover_image" name="cover_image" value="{{ old('cover_image') }}" placeholder="https://images.unsplash.com/..." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label for="challenge" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">The Challenge * (What problem the business was facing)</label>
                <textarea id="challenge" name="challenge" rows="3" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('challenge') }}</textarea>
            </div>

            <div>
                <label for="solution" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">The Solution * (What Sathi IT built or delivered)</label>
                <textarea id="solution" name="solution" rows="3" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('solution') }}</textarea>
            </div>

            <div>
                <label for="result" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">The Result * (Measurable outcome: traffic, sales, efficiency gained)</label>
                <textarea id="result" name="result" rows="3" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('result') }}</textarea>
            </div>

            <!-- Quantitative Metrics -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200">
                <div>
                    <label class="block text-[11px] font-bold text-slate-700 uppercase mb-1">Metric 1 Label & Value</label>
                    <div class="flex gap-2">
                        <input type="text" name="metric1_label" placeholder="Admin Hours Saved" class="w-2/3 px-3 py-2 rounded-lg border border-slate-300 text-xs">
                        <input type="text" name="metric1_val" placeholder="65%" class="w-1/3 px-3 py-2 rounded-lg border border-slate-300 text-xs font-bold text-emerald-600">
                    </div>
                </div>
                <div>
                    <label class="block text-[11px] font-bold text-slate-700 uppercase mb-1">Metric 2 Label & Value</label>
                    <div class="flex gap-2">
                        <input type="text" name="metric2_label" placeholder="Turnaround Speed" class="w-2/3 px-3 py-2 rounded-lg border border-slate-300 text-xs">
                        <input type="text" name="metric2_val" placeholder="2 Days" class="w-1/3 px-3 py-2 rounded-lg border border-slate-300 text-xs font-bold text-emerald-600">
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-6 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-slate-700">
                    <input type="checkbox" name="is_featured" value="1" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    <span>Feature on Home Page</span>
                </label>
            </div>

            <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                <a href="{{ route('admin.portfolios.index') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Cancel</a>
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Save Case Study
                </button>
            </div>
        </form>
    </div>

@endsection
