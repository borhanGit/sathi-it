@extends('layouts.app')

@section('title', 'Portfolio & Case Studies — Sathi IT')

@section('meta_description', 'A look at the businesses we have helped build, launch, and grow with custom BMS software, Laravel websites, and digital marketing.')

@section('content')

    <!-- Portfolio Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Client Success Stories
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Real Businesses. <br class="hidden sm:inline" />
                <span class="text-emerald-400">Measurable</span> Outcomes.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                "A look at the businesses we've helped build, launch, and grow."
            </p>
        </div>
    </section>

    <!-- Filter Tabs & Grid -->
    <section class="py-20 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Filter Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-16">
                <a href="{{ route('portfolio') }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition-all {{ empty($category) ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                    All Projects
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('portfolio', ['category' => $cat]) }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition-all {{ $category === $cat ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                        {{ $cat === 'Software' ? 'Custom Software (BMS)' : ($cat === 'Website' ? 'Website Development' : 'Digital Marketing') }}
                    </a>
                @endforeach
            </div>

            <!-- Portfolio Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($portfolios as $item)
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <!-- Cover Image -->
                            <div class="relative h-52 bg-slate-900 overflow-hidden">
                                <img src="{{ $item->cover_image }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[11px] font-extrabold tracking-wide uppercase bg-white/90 backdrop-blur-md text-slate-900 shadow-sm">
                                        {{ $item->category }}
                                    </span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <p class="text-xs font-bold text-emerald-400 uppercase tracking-wider">{{ $item->client_name }}</p>
                                    <h3 class="text-base font-black text-white truncate">{{ $item->title }}</h3>
                                </div>
                            </div>

                            <!-- Structured Body: Challenge -> Solution -> Result -->
                            <div class="p-6 space-y-4 text-xs">
                                <div class="space-y-1">
                                    <span class="font-bold uppercase tracking-wider text-slate-400 text-[10px]">The Challenge</span>
                                    <p class="text-slate-600 leading-relaxed">{{ $item->challenge }}</p>
                                </div>

                                <div class="space-y-1">
                                    <span class="font-bold uppercase tracking-wider text-slate-400 text-[10px]">The Sathi IT Solution</span>
                                    <p class="text-slate-600 leading-relaxed">{{ $item->solution }}</p>
                                </div>

                                <div class="p-3.5 rounded-2xl bg-emerald-50 border border-emerald-200 space-y-1">
                                    <span class="font-bold uppercase tracking-wider text-emerald-700 text-[10px]">Measurable Result</span>
                                    <p class="text-emerald-950 font-semibold leading-relaxed">{{ $item->result }}</p>
                                </div>

                                @if(!empty($item->metrics))
                                    <div class="grid grid-cols-2 gap-2 pt-2">
                                        @foreach($item->metrics as $metric)
                                            <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 text-center">
                                                <div class="text-base font-black text-slate-900">{{ $metric['value'] }}</div>
                                                <div class="text-[10px] text-slate-500 font-medium">{{ $metric['label'] }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Card Action -->
                        <div class="p-6 pt-0">
                            <a href="{{ route('portfolio.show', $item->slug) }}" class="block text-center w-full py-3 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-xs shadow-sm transition-colors">
                                View Full Case Study &rarr;
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-16 text-center text-slate-500">
                        <p class="text-base font-medium">No projects found in this category.</p>
                        <a href="{{ route('portfolio') }}" class="inline-block mt-3 text-xs font-bold text-emerald-600 underline">View all projects</a>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Consultation CTA -->
    <section class="py-20 bg-white border-t border-slate-200/80">
        <div class="max-w-4xl mx-auto px-4 text-center space-y-4">
            <h2 class="text-3xl font-black text-slate-900">Have a Business Problem That Needs Solving?</h2>
            <p class="text-slate-600 text-sm max-w-xl mx-auto">
                We'll listen to your workflow, diagnose the bottlenecks, and show you exactly what technology or marketing will solve it.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-xl shadow-emerald-600/25 transition-all">
                    <span>Schedule Free Strategy Call</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>
    </section>

@endsection
