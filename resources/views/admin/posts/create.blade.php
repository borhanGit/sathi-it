@extends('layouts.admin')

@section('title', 'Write Article')
@section('page_title', 'Create Blog Post')

@section('content')

    <div class="max-w-3xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
        <form action="{{ route('admin.posts.store') }}" method="POST" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label for="title" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Article Title *</label>
                    <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="e.g. Why We Started Sathi IT — And Who It’s Really For" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="category" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Category *</label>
                    <input type="text" id="category" name="category" required value="{{ old('category', 'Brand Story') }}" placeholder="Strategy / SME Growth" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="reading_time" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Reading Time</label>
                    <input type="text" id="reading_time" name="reading_time" value="{{ old('reading_time', '4 min read') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="author_name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Author Name</label>
                    <input type="text" id="author_name" name="author_name" value="{{ old('author_name', 'Sathi IT Team') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
            </div>

            <div>
                <label for="cover_image" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Cover Image URL</label>
                <input type="url" id="cover_image" name="cover_image" value="{{ old('cover_image') }}" placeholder="https://images.unsplash.com/..." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label for="excerpt" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Short Excerpt (Summary) *</label>
                <textarea id="excerpt" name="excerpt" rows="2" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('excerpt') }}</textarea>
            </div>

            <div>
                <label for="content" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Full Article Body *</label>
                <textarea id="content" name="content" rows="12" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm font-mono text-xs">{{ old('content') }}</textarea>
            </div>

            <div class="flex items-center gap-6 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-slate-700">
                    <input type="checkbox" name="is_published" value="1" checked class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    <span>Publish Immediately</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-slate-700">
                    <input type="checkbox" name="is_featured" value="1" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    <span>Featured Article</span>
                </label>
            </div>

            <div class="pt-4 flex items-center justify-between border-t border-slate-100">
                <a href="{{ route('admin.posts.index') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Cancel</a>
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Publish Article
                </button>
            </div>
        </form>
    </div>

@endsection
