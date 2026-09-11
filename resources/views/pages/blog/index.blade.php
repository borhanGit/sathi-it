@extends('layouts.app')

@section('title', 'Blog & Knowledge Hub — Sathi IT')

@section('meta_description', 'Practical technology and digital growth guides for small and medium business owners from the Sathi IT team.')

@section('content')

    <!-- Blog Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Knowledge & Insights
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Insights for Growing <br class="hidden sm:inline" />
                <span class="text-emerald-400">Businesses</span>.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Clear, straightforward advice on software, websites, and marketing — written specifically for business owners, not tech jargon.
            </p>
        </div>
    </section>

    <!-- Blog Feed -->
    <section class="py-20 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-2.5 mb-14">
                <a href="{{ route('blog') }}" class="px-5 py-2 rounded-full text-xs font-bold transition-all {{ empty($category) ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                    All Articles
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('blog', ['category' => $cat]) }}" class="px-5 py-2 rounded-full text-xs font-bold transition-all {{ $category === $cat ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            <!-- Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <article class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="relative h-48 bg-slate-900 overflow-hidden">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase bg-white/90 backdrop-blur-md text-slate-900 shadow-sm">
                                        {{ $post->category }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-6 space-y-3">
                                <div class="flex items-center gap-2 text-[11px] text-slate-400 font-medium">
                                    <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Recent' }}</span>
                                    <span>•</span>
                                    <span>{{ $post->reading_time }}</span>
                                </div>

                                <h3 class="text-lg font-black text-slate-900 group-hover:text-emerald-600 transition-colors line-clamp-2">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h3>

                                <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-semibold">{{ $post->author_name }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-emerald-600 group-hover:translate-x-1 transition-transform flex items-center gap-1">
                                <span>Read More</span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-16 text-center text-slate-500">
                        <p class="text-base font-medium">No posts found.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

@endsection
