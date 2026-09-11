@extends('layouts.app')

@section('title', 'Sathi IT — Your Business IT and Growth Partner')

@section('meta_description', 'Sathi IT is a complete digital solutions partner for small and medium businesses. We provide custom software, websites, and digital marketing under one roof.')

@section('content')

    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-32 gradient-hero-glow">
        <!-- Ambient decorative shapes -->
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-emerald-400/10 blur-[130px] rounded-full pointer-events-none -z-10"></div>
        <div class="absolute -top-20 right-10 w-96 h-96 bg-blue-500/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                <!-- Left: Headline & Copy -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <!-- Brand Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                        <span>Complete Digital Solutions Under One Roof</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-950 leading-[1.12]">
                        Your Business, <br class="hidden sm:inline" />
                        <span class="gradient-text">IT & Growth</span> Partner.
                    </h1>

                    <!-- Sub-headline & Body -->
                    <p class="text-lg sm:text-xl font-medium text-slate-700 leading-snug">
                        Sathi IT builds the software, websites, and marketing your business needs to grow — and stays with you as a partner, not just a vendor.
                    </p>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Most businesses don't fail because the idea is wrong — they get stuck because they don't have the right technology, the right marketing, or someone honest to guide them. Sathi IT brings software development, website design, and digital marketing together under one roof, so you get a complete, transparent digital partner instead of juggling multiple vendors.
                    </p>

                    <!-- CTAs -->
                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-base shadow-xl shadow-emerald-600/25 hover:shadow-emerald-600/40 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2.5">
                            <span>Get a Free Consultation</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="{{ route('services') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white hover:bg-slate-100 text-slate-800 font-semibold text-base border border-slate-200 shadow-sm hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                            <span>See Our Services</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </a>
                    </div>

                    <!-- Trust indicators -->
                    <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-xs text-slate-500 font-medium">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Guidance First, No Fluff</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>100% Transparent Pricing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Post-Launch Accountability</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Interactive Brand Ecosystem Preview -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Main Card -->
                        <div class="bg-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-2xl border border-slate-800 relative z-10 overflow-hidden">
                            <div class="flex items-center justify-between border-b border-slate-800 pb-5 mb-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold">
                                        IT
                                    </div>
                                    <div>
                                        <h2 class="font-bold text-sm text-white">Sathi Growth Architecture</h2>
                                        <p class="text-xs text-slate-400">All-in-One Digital Stack</p>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                    Active Partner
                                </span>
                            </div>

                            <!-- Interactive Solution Pillars -->
                            <div class="space-y-3.5">
                                <!-- Pillar 1 -->
                                <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/60 hover:border-emerald-500/50 transition-colors">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <span class="text-xs font-bold text-emerald-400 uppercase tracking-wide">Pillar 01 — Custom Software</span>
                                        <span class="text-[11px] font-semibold text-slate-400">From ৳10K</span>
                                    </div>
                                    <h3 class="text-sm font-semibold text-white">Business Management Systems (BMS)</h3>
                                    <p class="text-xs text-slate-400 mt-1">Automate inventory, orders, and stop owner bottlenecking.</p>
                                </div>

                                <!-- Pillar 2 -->
                                <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/60 hover:border-emerald-500/50 transition-colors">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wide">Pillar 02 — Web Development</span>
                                        <span class="text-[11px] font-semibold text-slate-400">From ৳20K</span>
                                    </div>
                                    <h3 class="text-sm font-semibold text-white">High-Speed Laravel Websites + SEO</h3>
                                    <p class="text-xs text-slate-400 mt-1">Clean conversion layouts that turn searchers into paid customers.</p>
                                </div>

                                <!-- Pillar 3 -->
                                <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/60 hover:border-emerald-500/50 transition-colors">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <span class="text-xs font-bold text-purple-400 uppercase tracking-wide">Pillar 03 — Digital Marketing</span>
                                        <span class="text-[11px] font-semibold text-slate-400">From ৳20K/mo</span>
                                    </div>
                                    <h3 class="text-sm font-semibold text-white">Social Media, SEO & Paid Funnels</h3>
                                    <p class="text-xs text-slate-400 mt-1">Real sales inquiries and measurable ROI without vanity boosts.</p>
                                </div>
                            </div>

                            <!-- Bottom Metrics Pill -->
                            <div class="mt-6 pt-5 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                <span>Starting locally, scaling globally</span>
                                <a href="{{ route('about') }}" class="text-emerald-400 font-semibold hover:underline flex items-center gap-1">
                                    <span>Learn Our Story</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>

                        <!-- Floating Micro Badges -->
                        <div class="hidden sm:flex absolute -bottom-5 -left-6 z-20 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-200/80 items-center gap-3 animate-float">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-900">Zero Coordination Gaps</p>
                                <p class="text-[11px] text-slate-500">1 unified accountable team</p>
                            </div>
                        </div>

                        <div class="hidden sm:flex absolute -top-5 -right-6 z-20 bg-white p-3.5 rounded-2xl shadow-xl border border-slate-200/80 items-center gap-3 animate-pulse-subtle">
                            <div class="w-9 h-9 rounded-xl bg-blue-100 flex items-center justify-center text-blue-700 font-bold">
                                ৳
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-900">Clear Pricing</p>
                                <p class="text-[11px] text-slate-500">Honest upfront scope</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights Preview Cards (From User Doc) -->
    <section class="py-20 bg-white border-y border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Core Solutions
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Three Pillars Built to Grow Your Business
                </h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Sathi IT offers three core services, designed to work together seamlessly or stand alone depending on what your business actually needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1: BMS -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between group">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs font-bold text-emerald-600 uppercase tracking-wide">Starting from ৳10,000</span>
                                <span class="text-[11px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded-full font-medium">BMS Starter</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-2">Custom Software (BMS)</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Business management systems built around how you actually work. Automate the repetitive, manual work that keeps owners stuck managing instead of growing.
                            </p>
                        </div>
                        <ul class="space-y-2.5 text-xs text-slate-700 pt-2 border-t border-slate-100">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Inventory, sales, and order management</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Staff and task management tools</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Reporting dashboards for real-time visibility</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-100">
                        <a href="{{ route('services.show', 'custom-software-bms') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-emerald-600 hover:text-emerald-700 group-hover:translate-x-1 transition-all">
                            <span>Explore BMS Software</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Website Development -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between group border-emerald-500/30 ring-2 ring-emerald-500/10">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs font-bold text-blue-600 uppercase tracking-wide">Starting from ৳20,000</span>
                                <span class="text-[11px] bg-emerald-50 text-emerald-700 font-bold px-2 py-0.5 rounded-full">One-time package</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-2">Website Development</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Fast, clean, SEO-ready websites built on Laravel — designed with clear content and calls to action that turn visitors into paying customers.
                            </p>
                        </div>
                        <ul class="space-y-2.5 text-xs text-slate-700 pt-2 border-t border-slate-100">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Custom design — no generic templates</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Mobile-responsive, fast-loading pages</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>On-page SEO setup included from day one</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-100">
                        <a href="{{ route('services.show', 'website-development') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-blue-600 hover:text-blue-700 group-hover:translate-x-1 transition-all">
                            <span>Explore Web Development</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Digital Marketing -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between group">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs font-bold text-purple-600 uppercase tracking-wide">Starting from ৳20,000</span>
                                <span class="text-[11px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded-full font-medium">Monthly package</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-2">Digital Marketing</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Getting found matters as much as looking good. Targeted social media, search engine optimization (SEO), and paid campaigns that bring high-intent customers.
                            </p>
                        </div>
                        <ul class="space-y-2.5 text-xs text-slate-700 pt-2 border-t border-slate-100">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Social media marketing and content</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Search engine optimization (SEO)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Paid ad campaigns (Facebook & Google)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-100">
                        <a href="{{ route('services.show', 'digital-marketing') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-purple-600 hover:text-purple-700 group-hover:translate-x-1 transition-all">
                            <span>Explore Digital Marketing</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- "Why Sathi IT" Section (From User Doc) -->
    <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left: Why Us Pitch -->
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-3.5 py-1.5 rounded-full">
                        Why Sathi IT
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Built Different. <br />
                        <span class="text-emerald-400">Accountable</span> Throughout.
                    </h2>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Too many businesses hit a ceiling because they get burned by agencies who overpromise, underdeliver, or simply disappear after taking payment.
                    </p>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Sathi IT was founded to fix that. We guide before we sell, stay transparent on costs and timelines, and take real responsibility for outcomes.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-emerald-400 text-sm font-bold border border-slate-700 transition-colors">
                            <span>Read Our Full Story</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Right: The 4 Core Principles -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <!-- Feature 1 -->
                    <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 hover:border-emerald-500/50 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 font-black">
                            01
                        </div>
                        <h3 class="text-base font-bold text-white mb-2">We Guide You First</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            If you don't need a service, we'll tell you honestly. Our first job is to help you understand your real options, not sell you bloated contracts.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 hover:border-emerald-500/50 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/20 flex items-center justify-center text-blue-400 mb-4 font-black">
                            02
                        </div>
                        <h3 class="text-base font-bold text-white mb-2">One Unified Team</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            One team for software, web, and marketing — no coordination gaps, no inconsistent branding, and zero vendor finger-pointing.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 hover:border-emerald-500/50 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/20 flex items-center justify-center text-amber-400 mb-4 font-black">
                            03
                        </div>
                        <h3 class="text-base font-bold text-white mb-2">Full Transparency</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Transparent pricing and process — you always know exactly what you are paying for, the delivery timeline, and why it matters.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/80 hover:border-emerald-500/50 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400 mb-4 font-black">
                            04
                        </div>
                        <h3 class="text-base font-bold text-white mb-2">We Stay After Launch</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Growth does not stop on delivery day. We stay with you as an ongoing partner for maintenance, optimization, and future scaling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies / Featured Portfolio Highlights -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="space-y-3 max-w-xl">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                        Proven Results
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                        A Look at the Businesses We’ve Helped Build, Launch & Grow
                    </h2>
                </div>
                <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 hover:text-emerald-700">
                    <span>View All Case Studies</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredPortfolios as $case)
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="relative h-48 overflow-hidden bg-slate-100">
                                <img src="{{ $case->cover_image }}" alt="{{ $case->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-slate-900/80 backdrop-blur-md text-white">
                                        {{ $case->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div>
                                    <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wide">{{ $case->client_name }}</p>
                                    <h3 class="text-lg font-bold text-slate-900 mt-1">{{ $case->title }}</h3>
                                </div>

                                <div class="space-y-2 text-xs">
                                    <p class="text-slate-500"><strong class="text-slate-700">Challenge:</strong> {{ Str::limit($case->challenge, 85) }}</p>
                                    <p class="text-slate-500"><strong class="text-slate-700">Solution:</strong> {{ Str::limit($case->solution, 85) }}</p>
                                    <p class="text-emerald-700 bg-emerald-50 p-2.5 rounded-xl font-medium"><strong class="text-emerald-800">Result:</strong> {{ Str::limit($case->result, 85) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-2 border-t border-slate-100">
                            <a href="{{ route('portfolio.show', $case->slug) }}" class="inline-flex items-center gap-1 text-xs font-bold text-slate-900 hover:text-emerald-600">
                                <span>Read Full Case Study</span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Preview & The Bundle Advantage -->
    <section class="py-20 bg-white border-y border-slate-200/80" id="pricing-preview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Transparent Packages
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Clear Pricing. No Hidden Surprises.
                </h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Starting reference packages based on honest scope. Confirm final scope and timeline with our team before launch.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pricingPlans as $plan)
                    <div class="rounded-3xl p-6 border flex flex-col justify-between transition-all duration-300 {{ $plan->is_popular ? 'bg-slate-900 text-white border-slate-800 shadow-2xl relative' : 'bg-slate-50/70 text-slate-900 border-slate-200/80 hover:bg-white hover:shadow-lg' }}">
                        @if($plan->is_popular)
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-emerald-500 text-slate-950 text-[10px] font-extrabold uppercase px-3 py-0.5 rounded-full tracking-wider shadow-md">
                                Recommended
                            </div>
                        @endif

                        <div class="space-y-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wide {{ $plan->is_popular ? 'text-emerald-400' : 'text-emerald-600' }}">{{ $plan->category }}</span>
                                <h3 class="text-lg font-black mt-1">{{ $plan->name }}</h3>
                                <p class="text-xs {{ $plan->is_popular ? 'text-slate-400' : 'text-slate-500' }} mt-1">{{ $plan->description }}</p>
                            </div>

                            <div class="pt-2 border-t {{ $plan->is_popular ? 'border-slate-800' : 'border-slate-200' }}">
                                <div class="text-3xl font-black tracking-tight">{{ $plan->price }}</div>
                                <span class="text-[11px] {{ $plan->is_popular ? 'text-slate-400' : 'text-slate-500' }}">{{ $plan->billing_cycle }}</span>
                            </div>

                            <ul class="space-y-2 text-xs pt-2">
                                @foreach(array_slice($plan->features, 0, 4) as $feat)
                                    <li class="flex items-start gap-2">
                                        <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        <span class="{{ $plan->is_popular ? 'text-slate-300' : 'text-slate-600' }}">{{ $feat }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="pt-6 mt-6 border-t {{ $plan->is_popular ? 'border-slate-800' : 'border-slate-200' }}">
                            <a href="{{ route('contact') }}?service={{ urlencode($plan->name) }}" class="block text-center w-full py-3 rounded-xl text-xs font-bold transition-all {{ $plan->is_popular ? 'bg-emerald-500 hover:bg-emerald-400 text-slate-950 shadow-lg shadow-emerald-500/20' : 'bg-slate-900 hover:bg-emerald-600 text-white' }}">
                                {{ $plan->cta_text }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Bundle Advantage Banner -->
            <div class="mt-12 p-8 rounded-3xl bg-emerald-50 border border-emerald-200 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="space-y-2 text-center md:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-600 text-white text-[11px] font-bold">
                        Special Incentive
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">The Sathi IT Bundle Advantage</h3>
                    <p class="text-sm text-slate-700 max-w-2xl">
                        Because we deliver software, web, and marketing from one in-house team, clients who combine services avoid coordination gaps and inconsistent branding — and receive custom bundle incentives.
                    </p>
                </div>
                <a href="{{ route('contact') }}?service=Full+Digital+Bundle" class="shrink-0 px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-colors">
                    Inquire for Bundle Rate
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion Preview -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Common Questions
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-slate-600 text-sm">
                    Straightforward answers about our services, process, and pricing.
                </p>
            </div>

            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden {{ $index === 0 ? 'active' : '' }}">
                        <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-emerald-600 transition-colors">
                            <span class="text-base">{{ $faq->question }}</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-answer px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('faq') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700">
                    View All Frequently Asked Questions &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Closing CTA Band (Exact Copy from Document) -->
    <section class="py-20 bg-slate-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-radial from-emerald-500/10 via-transparent to-transparent opacity-50"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 px-3.5 py-1.5 rounded-full border border-emerald-500/30">
                Let's Partner Up
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                Ready to Stop Getting Stuck and Start Scaling?
            </h2>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Let's talk about where your business is — and where it can go. Honest advice, clear pricing, and no pressure.
            </p>
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-base shadow-xl shadow-emerald-500/25 transition-all">
                    Talk to Us Today
                </a>
                <a href="https://wa.me/8801700000000" target="_blank" rel="noopener" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-emerald-400 font-bold text-base border border-slate-700 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.159.57 4.185 1.564 5.939l-1.564 5.829 5.961-1.564c1.713.934 3.673 1.464 5.759 1.464 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z"/></svg>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

@endsection
