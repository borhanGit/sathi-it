@extends('layouts.app')

@section('title', $post->title . ' — Sathi IT Blog')

@section('meta_description', $post->excerpt)

@section('content')

    <!-- Article Header -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-4">
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-emerald-400">Home</a>
                <span>/</span>
                <a href="{{ route('blog') }}" class="hover:text-emerald-400">Blog</a>
                <span>/</span>
                <span class="text-emerald-400">{{ $post->category }}</span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                {{ $post->title }}
            </h1>
            <div class="flex items-center gap-4 text-xs text-slate-400 pt-2">
                <span>By <strong class="text-white">{{ $post->author_name }}</strong></span>
                <span>•</span>
                <span>{{ $post->published_at ? $post->published_at->format('F d, Y') : 'Recent' }}</span>
                <span>•</span>
                <span class="px-2 py-0.5 rounded-md bg-slate-800 text-emerald-400 font-semibold">{{ $post->reading_time }}</span>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            @if($post->cover_image)
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-80 sm:h-[400px] object-cover">
                </div>
            @endif

            <!-- Excerpt Callout -->
            <div class="p-6 rounded-2xl bg-emerald-50/70 border-l-4 border-emerald-500 text-slate-800 text-base font-medium leading-relaxed">
                {{ $post->excerpt }}
            </div>

            <!-- Full Article Body -->
            <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed text-base space-y-6">
                {!! nl2br(e($post->content)) !!}
            </div>

            <!-- Author & Share Box -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-900 text-emerald-400 font-black text-lg flex items-center justify-center">
                        S
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Published by {{ $post->author_name }}</h4>
                        <p class="text-xs text-slate-500">Sathi IT Editorial & Growth Advisory</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-xs transition-colors">
                    Talk to the Author
                </a>
            </div>

            <!-- Recent Articles -->
            @if($recentPosts->isNotEmpty())
                <div class="pt-12 border-t border-slate-200 space-y-6">
                    <h3 class="text-2xl font-black text-slate-900">More Articles for Business Owners:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        @foreach($recentPosts as $rec)
                            <div class="rounded-2xl border border-slate-200 p-5 bg-slate-50 hover:bg-white hover:shadow-md transition-all">
                                <span class="text-[10px] font-bold uppercase text-emerald-600">{{ $rec->category }}</span>
                                <h4 class="font-bold text-slate-900 text-sm mt-1 line-clamp-2">
                                    <a href="{{ route('blog.show', $rec->slug) }}" class="hover:text-emerald-600">{{ $rec->title }}</a>
                                </h4>
                                <a href="{{ route('blog.show', $rec->slug) }}" class="inline-block mt-3 text-xs font-bold text-emerald-600">Read &rarr;</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </article>

@endsection
