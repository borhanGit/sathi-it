@extends('layouts.app')

@section('title', 'About Us — Sathi IT | Our Story, Mission & Values')

@section('meta_description', 'Learn about Sathi IT, why we started, our mission to help small & medium businesses break through growth ceilings, and our core values.')

@section('content')

    <!-- Header Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                About Sathi IT
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                A Partner That Guides <br class="hidden sm:inline" />
                <span class="text-emerald-400">Before</span> It Builds.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Founded to give business owners honest technology, dependable results, and freedom from agency games.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-24 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Story Narrative -->
                <div class="lg:col-span-7 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                        Our Story
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                        Small & Medium Businesses Often Hit a Ceiling. We Exist to Break It.
                    </h2>
                    
                    <div class="space-y-4 text-slate-600 leading-relaxed text-base">
                        <p>
                            Sathi IT was founded on a simple observation: small and medium-sized businesses often hit a ceiling. Not because they lack ambition, but because the owner is stretched too thin — managing operations, sales, and staff — with little time or technical background to make confident digital decisions.
                        </p>
                        <p>
                            Too often, this gap gets filled by agencies or freelancers who overpromise, underdeliver, or simply disappear after taking payment. Business owners are left with a half-working website, a marketing campaign with no results, and no clear idea of what went wrong.
                        </p>
                        <p class="p-4 rounded-2xl bg-emerald-50/60 border-l-4 border-emerald-500 text-slate-800 font-medium">
                            Sathi IT was built to be different — a partner that guides before it builds, stays transparent throughout, and takes real responsibility for outcomes, not just deliverables. We're starting locally, working closely with businesses we understand, and using that real-world experience to grow into a team that can serve businesses globally.
                        </p>
                    </div>
                </div>

                <!-- Story Visual Box -->
                <div class="lg:col-span-5">
                    <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-2xl border border-slate-800 space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-black">
                                💡
                            </div>
                            <div>
                                <h3 class="font-bold text-white text-base">Our Core Promise</h3>
                                <p class="text-xs text-slate-400">Accountability at every phase</p>
                            </div>
                        </div>

                        <ul class="space-y-4 text-xs text-slate-300">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">✓</span>
                                <span><strong>Complete digital solutions</strong> — software, web, and marketing — from one accountable team.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">✓</span>
                                <span><strong>Guidance before selling</strong> — we advise honestly, even if that means recommending less.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">✓</span>
                                <span><strong>Full transparency</strong> — clear pricing, clear process, clear ownership of outcomes.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">✓</span>
                                <span><strong>Built for growth</strong> — every solution is designed to help a business scale, not just launch.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Callout -->
    <section class="py-20 bg-slate-900 text-white relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-3 py-1 rounded-full">
                Our Mission
            </span>
            <blockquote class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight leading-snug">
                "To help small and medium businesses break through the growth ceiling by giving them honest guidance, dependable technology, and marketing that actually works — all from one accountable partner."
            </blockquote>
            <p class="text-sm text-slate-400">
                — Sathi IT Founding Directive
            </p>
        </div>
    </section>

    <!-- Our Values Section (From User Doc) -->
    <section class="py-24 bg-slate-50" id="values">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    What Drives Us
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Our Core Values
                </h2>
                <p class="text-slate-600 text-sm">
                    How we work with every business owner, every single day.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-black text-lg mb-6">
                        01
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Transparency</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Clear pricing, honest timelines, and straight answers — even when the answer is <em class="text-emerald-700 font-semibold">"you don't need this."</em>
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center font-black text-lg mb-6">
                        02
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Guidance First</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        We advise before we sell. Our primary job is to help you understand your options and choose the right path for your business stage.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-black text-lg mb-6">
                        03
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Reliability</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        We deliver what we promise, and we stay accountable after the project ships. No disappearing acts or unsupported code.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center font-black text-lg mb-6">
                        04
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Growth-Minded</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Every solution we build is designed to scale with your business, not box it into inflexible proprietary lock-ins.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison: Juggling Multiple Vendors vs Partnering with Sathi IT -->
    <section class="py-24 bg-white border-t border-slate-200/80">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    The Difference
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Juggling Multiple Vendors vs. One Accountable Partner
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left: The Old Way -->
                <div class="p-8 rounded-3xl bg-rose-50/50 border border-rose-200 space-y-4">
                    <div class="flex items-center gap-2 text-rose-700 font-bold text-base">
                        <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        <span>Juggling Freelancers & Fragmented Agencies</span>
                    </div>
                    <ul class="space-y-3 text-xs text-rose-950">
                        <li class="flex items-start gap-2">
                            <span class="text-rose-600 font-bold">•</span>
                            <span>The web developer blames the marketer; the marketer blames the website.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-rose-600 font-bold">•</span>
                            <span>Inconsistent brand messaging and confusing customer journeys.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-rose-600 font-bold">•</span>
                            <span>You waste 15+ hours weekly playing referee between technical contractors.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-rose-600 font-bold">•</span>
                            <span>Hidden fees, disappearing developers, and zero accountability for sales results.</span>
                        </li>
                    </ul>
                </div>

                <!-- Right: Sathi IT Way -->
                <div class="p-8 rounded-3xl bg-emerald-50/70 border border-emerald-200 space-y-4 shadow-sm">
                    <div class="flex items-center gap-2 text-emerald-800 font-bold text-base">
                        <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span>The Sathi IT Partnership</span>
                    </div>
                    <ul class="space-y-3 text-xs text-emerald-950 font-medium">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span>One unified team responsible for software, website, and ad results.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span>Consistent branding, synchronized landing pages, and clean database funnels.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span>Single point of contact — you focus on running your business operations.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 font-bold">•</span>
                            <span>Transparent pricing in BDT, clear milestones, and ongoing support after delivery.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-sm shadow-xl transition-all">
                    <span>Talk to Us About Your Business</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>
    </section>

@endsection
