@extends('layouts.app')

@section('title', $portfolio->title . ' — Case Study | Sathi IT')

@section('meta_description', Str::limit($portfolio->result, 160))

@section('content')

    <!-- Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-4">
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-emerald-400">Home</a>
                <span>/</span>
                <a href="{{ route('portfolio') }}" class="hover:text-emerald-400">Case Studies</a>
                <span>/</span>
                <span class="text-emerald-400">{{ $portfolio->title }}</span>
            </div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-bold border border-emerald-500/30">
                {{ $portfolio->category }} • {{ $portfolio->client_name }}
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight max-w-3xl leading-tight">
                {{ $portfolio->title }}
            </h1>
        </div>
    </section>

    <!-- Case Study Details -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <!-- Cover Banner -->
            <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                <img src="{{ $portfolio->cover_image }}" alt="{{ $portfolio->title }}" class="w-full h-80 sm:h-[420px] object-cover">
            </div>

            <!-- Key Metrics Bar -->
            @if(!empty($portfolio->metrics))
                <div class="p-8 rounded-3xl bg-slate-900 text-white grid grid-cols-1 sm:grid-cols-3 gap-6 text-center border border-slate-800 shadow-xl">
                    @foreach($portfolio->metrics as $metric)
                        <div class="space-y-1">
                            <div class="text-3xl sm:text-4xl font-black text-emerald-400">{{ $metric['value'] }}</div>
                            <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">{{ $metric['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- 3 Structural Pillars -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 1. The Challenge -->
                <div class="p-8 rounded-3xl bg-rose-50/50 border border-rose-200 space-y-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-rose-700">01. The Challenge</span>
                    <h3 class="text-lg font-black text-slate-900">What Was Holding Them Back</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">{{ $portfolio->challenge }}</p>
                </div>

                <!-- 2. The Solution -->
                <div class="p-8 rounded-3xl bg-blue-50/50 border border-blue-200 space-y-3">
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700">02. The Sathi IT Solution</span>
                    <h3 class="text-lg font-black text-slate-900">What We Engineered</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">{{ $portfolio->solution }}</p>
                </div>

                <!-- 3. The Result -->
                <div class="p-8 rounded-3xl bg-emerald-50/70 border border-emerald-200 space-y-3 shadow-sm">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">03. The Measurable Result</span>
                    <h3 class="text-lg font-black text-slate-900">Real Business Growth</h3>
                    <p class="text-xs text-slate-800 font-medium leading-relaxed">{{ $portfolio->result }}</p>
                </div>
            </div>

            <!-- Bottom Action -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 text-center space-y-4">
                <h3 class="text-xl font-bold text-slate-900">Need a Similar Solution for Your Business?</h3>
                <p class="text-xs text-slate-600 max-w-md mx-auto">
                    We adapt our architecture to your operational reality so your business can scale without technical headaches.
                </p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}?service={{ urlencode($portfolio->category) }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-xs shadow-md transition-colors">
                        <span>Discuss This Project Type</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
