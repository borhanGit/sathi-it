@extends('layouts.admin')

@section('title', 'Add FAQ')
@section('page_title', 'Create FAQ')

@section('content')

    <div class="max-w-3xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
        <form action="{{ route('admin.faqs.store') }}" method="POST" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label for="question" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Question *</label>
                    <input type="text" id="question" name="question" required value="{{ old('question') }}" placeholder="e.g. How much do your services cost?" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="category" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Category *</label>
                    <input type="text" id="category" name="category" required value="{{ old('category', 'General') }}" placeholder="General / Pricing" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div>
                <label for="answer" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Answer *</label>
                <textarea id="answer" name="answer" rows="5" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('answer') }}</textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="sort_order" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Display Sort Order</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 1) }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div class="flex items-center gap-2 pt-6">
                    <input type="checkbox" id="is_active" name="is_active" value="1" checked class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    <label for="is_active" class="text-xs font-bold text-slate-700">Active & Displayed</label>
                </div>
            </div>

            <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                <a href="{{ route('admin.faqs.index') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Cancel</a>
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Save FAQ
                </button>
            </div>
        </form>
    </div>

@endsection
