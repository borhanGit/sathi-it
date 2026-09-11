@extends('layouts.app')

@section('title', $service->title . ' — Sathi IT Services')

@section('meta_description', $service->short_desc)

@section('content')

    <!-- Service Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-4">
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-emerald-400">Home</a>
                <span>/</span>
                <a href="{{ route('services') }}" class="hover:text-emerald-400">Services</a>
                <span>/</span>
                <span class="text-emerald-400">{{ $service->title }}</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                {{ $service->title }}
            </h1>
            <p class="text-slate-400 text-base sm:text-xl max-w-2xl leading-relaxed">
                {{ $service->tagline }}
            </p>
        </div>
    </section>

    <!-- Detail Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Full Description & Features -->
                <div class="lg:col-span-8 space-y-10">
                    <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed text-base">
                        {!! nl2br(e($service->full_desc ?? $service->short_desc)) !!}
                    </div>

                    @if(!empty($service->features))
                        <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 space-y-6">
                            <h3 class="text-xl font-black text-slate-900">What’s Included in This Solution:</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($service->features as $feature)
                                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200/80 shadow-xs">
                                        <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        <span class="text-xs font-semibold text-slate-800">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($relatedPortfolios->isNotEmpty())
                        <div class="space-y-6 pt-6 border-t border-slate-200">
                            <h3 class="text-xl font-black text-slate-900">Related Case Studies:</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                @foreach($relatedPortfolios as $rel)
                                    <div class="rounded-2xl border border-slate-200/80 p-5 bg-white shadow-xs hover:shadow-md transition-shadow">
                                        <span class="text-[10px] font-bold uppercase text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">{{ $rel->category }}</span>
                                        <h4 class="font-bold text-slate-900 mt-2">{{ $rel->title }}</h4>
                                        <p class="text-xs text-slate-500 mt-1 line-clamp-2">{{ $rel->result }}</p>
                                        <a href="{{ route('portfolio.show', $rel->slug) }}" class="inline-block mt-3 text-xs font-bold text-emerald-600 hover:underline">Read Results &rarr;</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right: Quick Quote Sidebar -->
                <div class="lg:col-span-4">
                    <div class="sticky top-28 p-8 rounded-3xl bg-slate-900 text-white shadow-2xl border border-slate-800 space-y-6">
                        <div class="border-b border-slate-800 pb-4">
                            <span class="text-xs font-bold text-emerald-400 uppercase tracking-wide">Starting Investment</span>
                            <div class="text-3xl font-black text-white mt-1">{{ $service->formatted_price }}</div>
                            <span class="text-xs text-slate-400">{{ $service->price_unit }}</span>
                        </div>

                        <p class="text-xs text-slate-300 leading-relaxed">
                            Need a custom scope or have specific operational workflows? Talk directly with our technical growth lead.
                        </p>

                        <a href="{{ route('contact') }}?service={{ urlencode($service->title) }}" class="block text-center w-full py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs shadow-lg shadow-emerald-500/20 transition-colors">
                            Book Free Consultation
                        </a>

                        <div class="pt-4 border-t border-slate-800 space-y-2 text-xs text-slate-400">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Direct advice, no hard sells</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Clear written specification</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Ongoing support warranty</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
