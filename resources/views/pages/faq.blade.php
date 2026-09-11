@extends('layouts.app')

@section('title', 'Frequently Asked Questions — Sathi IT')

@section('meta_description', 'Everything you need to know about Sathi IT services, pricing, technology stack, and post-launch support.')

@section('content')

    <!-- FAQ Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Help & Answers
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Frequently Asked <br class="hidden sm:inline" />
                <span class="text-emerald-400">Questions</span>.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Direct, transparent answers regarding our services, technology, process, and post-delivery partnership.
            </p>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="py-20 bg-slate-50 min-h-[600px]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden {{ $index === 0 ? 'active' : '' }}">
                        <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-emerald-600 transition-colors">
                            <span class="text-base sm:text-lg">{{ $faq->question }}</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-answer px-6 pb-6 text-slate-600 text-sm sm:text-base leading-relaxed border-t border-slate-100 pt-4">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Still Have Questions Band -->
            <div class="mt-16 p-8 rounded-3xl bg-slate-900 text-white text-center space-y-4 shadow-xl">
                <h3 class="text-xl font-black text-white">Have a question that is not answered here?</h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-md mx-auto">
                    Reach out to our team. We guide you first — if a service isn't the right fit for your business right now, we'll tell you honestly.
                </p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors">
                        <span>Send Us Your Question</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
