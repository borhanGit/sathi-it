@extends('layouts.app')

@section('title', 'Services & Pricing Packages — Sathi IT')

@section('meta_description', 'Explore Sathi IT services: Custom Software (BMS), Laravel Website Development, and Digital Marketing. Transparent pricing packages starting from ৳10,000.')

@section('content')

    <!-- Services Header Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                What We Build & Deliver
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Three Scalable Services. <br class="hidden sm:inline" />
                <span class="text-emerald-400">One Accountable</span> Partner.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Designed to work together seamlessly or stand alone depending on what your business actually needs right now.
            </p>
        </div>
    </section>

    <!-- Detailed Services Breakdown -->
    <section class="py-24 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <!-- Service 1: Custom Software (BMS) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center" id="bms">
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-200">
                        Pillar 01 • Custom Software
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                        Business Management System (BMS) Built Around How You Actually Work
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        A business management system built around how your business actually operates — not a rigid template you have to adapt to. We automate the repetitive, manual work that keeps owners stuck managing instead of growing.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Inventory, sales & orders</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Staff and task tools</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Real-time executive dashboards</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span>Custom bespoke modules</span>
                        </div>
                    </div>
                    <div class="pt-2 flex items-center gap-4">
                        <a href="{{ route('contact') }}?service=Custom+Software+(BMS)" class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-bold shadow-md transition-colors">
                            Request BMS Consultation
                        </a>
                        <span class="text-xs text-slate-500 font-semibold">Starting from ৳10,000</span>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-2xl border border-slate-800 space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                            <span class="text-xs font-bold text-emerald-400 uppercase tracking-wide">BMS Operational Architecture</span>
                            <span class="text-[11px] bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full">Laravel Engine</span>
                        </div>
                        <div class="space-y-4 text-xs text-slate-300">
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Stop Spreadsheet Dependency</h4>
                                <p class="text-slate-400 leading-relaxed">No more corrupted formulas, forgotten rows, or conflicting versions floating on staff chat apps.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Real-Time Multi-Branch Sync</h4>
                                <p class="text-slate-400 leading-relaxed">Instantly know warehouse stock, branch sales, and receivables from your phone anywhere.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Role-Based Access Security</h4>
                                <p class="text-slate-400 leading-relaxed">Employees only see what they need to execute their job; proprietary margins stay private.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: Website Development -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center" id="website">
                <div class="lg:col-span-6 lg:order-2 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-bold border border-blue-200">
                        Pillar 02 • Web Engineering
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                        Clean, Fast, SEO-Ready Websites That Turn Visitors Into Customers
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        A clean, fast, mobile-friendly website built on Laravel — designed with a simple, high-contrast aesthetic, clear content, and clear calls to action, so visitors know exactly what to do next. Every website includes on-page SEO so you're discoverable from day one.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>No generic bloated templates</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>Mobile-first responsive UX</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>On-page SEO setup included</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>Tailored CMS back-office</span>
                        </div>
                    </div>
                    <div class="pt-2 flex items-center gap-4">
                        <a href="{{ route('contact') }}?service=Website+Development" class="px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white text-sm font-bold shadow-md transition-colors">
                            Build Your Website
                        </a>
                        <span class="text-xs text-slate-500 font-semibold">Starting from ৳20,000</span>
                    </div>
                </div>

                <div class="lg:col-span-6 lg:order-1">
                    <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-2xl border border-slate-800 space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                            <span class="text-xs font-bold text-blue-400 uppercase tracking-wide">Why Laravel Makes a Difference</span>
                            <span class="text-[11px] bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full">PHP Framework</span>
                        </div>
                        <div class="space-y-4 text-xs text-slate-300">
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Sub-Second Load Times</h4>
                                <p class="text-slate-400 leading-relaxed">Unlike sluggish page builder plugins that drag mobile devices down, clean Laravel code loads instantly on mobile 4G networks.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Built for Future Scaling</h4>
                                <p class="text-slate-400 leading-relaxed">Easily expand from a corporate brochure site to a multi-vendor marketplace or customer portal without rewriting from scratch.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Bank-Grade Protection</h4>
                                <p class="text-slate-400 leading-relaxed">Native protection against CSRF, SQL injections, and malicious spam scripts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Digital Marketing -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center" id="marketing">
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-xs font-bold border border-purple-200">
                        Pillar 03 • Customer Acquisition
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                        Getting Found Matters as Much as Looking Good
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Getting found matters as much as looking good. Our digital marketing service covers the channels that actually bring customers to small and medium businesses. We eliminate vanity follower counts and focus purely on verified leads and measurable ROI.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Social media marketing & content</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Search engine optimization (SEO)</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Paid ad campaigns (Facebook & Google)</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 text-xs font-medium text-slate-800 flex items-center gap-2.5">
                            <span class="text-purple-600 font-bold">✓</span>
                            <span>Transparent monthly ROI reporting</span>
                        </div>
                    </div>
                    <div class="pt-2 flex items-center gap-4">
                        <a href="{{ route('contact') }}?service=Digital+Marketing" class="px-6 py-3.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white text-sm font-bold shadow-md transition-colors">
                            Ignite Acquisition
                        </a>
                        <span class="text-xs text-slate-500 font-semibold">Starting from ৳20,000 / mo</span>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-2xl border border-slate-800 space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                            <span class="text-xs font-bold text-purple-400 uppercase tracking-wide">Acquisition Engine</span>
                            <span class="text-[11px] bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full">High Intent Funnels</span>
                        </div>
                        <div class="space-y-4 text-xs text-slate-300">
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Targeted B2B & SME Audiences</h4>
                                <p class="text-slate-400 leading-relaxed">No generic 'boost post' clicks. We build custom pixel retargeting and intent-based keyword funnels.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Branded Content Creation</h4>
                                <p class="text-slate-400 leading-relaxed">Professional graphics, persuasive copy, and engaging reels customized to your market voice.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-800/60 border border-slate-700">
                                <h4 class="font-bold text-white mb-1">Clear Ownership of Results</h4>
                                <p class="text-slate-400 leading-relaxed">You receive honest monthly breakdowns showing ad spend, cost-per-lead, and sales conversions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Pricing Reference Packages (From Section 4.4 of User Doc) -->
    <section class="py-24 bg-slate-50" id="pricing">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Transparent Investment
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Starting Packages
                </h2>
                <p class="text-slate-600 text-sm">
                    Starting reference points based on current internal pricing. Confirm final scope and timeline with our team before kick-off.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pricingPlans as $plan)
                    <div class="rounded-3xl p-7 border flex flex-col justify-between transition-all duration-300 {{ $plan->is_popular ? 'bg-slate-900 text-white border-slate-800 shadow-2xl relative' : 'bg-white text-slate-900 border-slate-200/80 shadow-sm hover:shadow-xl' }}">
                        @if($plan->is_popular)
                            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-emerald-500 text-slate-950 text-[10px] font-extrabold uppercase px-3 py-1 rounded-full tracking-wider shadow-md">
                                Best Value
                            </div>
                        @endif

                        <div class="space-y-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wide {{ $plan->is_popular ? 'text-emerald-400' : 'text-emerald-600' }}">{{ $plan->category }}</span>
                                <h3 class="text-xl font-black mt-1">{{ $plan->name }}</h3>
                                <p class="text-xs {{ $plan->is_popular ? 'text-slate-400' : 'text-slate-500' }} mt-1 leading-relaxed">{{ $plan->description }}</p>
                            </div>

                            <div class="pt-3 border-t {{ $plan->is_popular ? 'border-slate-800' : 'border-slate-100' }}">
                                <div class="text-3xl font-black tracking-tight">{{ $plan->price }}</div>
                                <span class="text-xs {{ $plan->is_popular ? 'text-slate-400' : 'text-slate-500' }}">{{ $plan->billing_cycle }}</span>
                            </div>

                            <ul class="space-y-2.5 text-xs pt-2">
                                @foreach($plan->features as $feat)
                                    <li class="flex items-start gap-2.5">
                                        <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        <span class="{{ $plan->is_popular ? 'text-slate-300' : 'text-slate-600' }} leading-relaxed">{{ $feat }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="pt-6 mt-8 border-t {{ $plan->is_popular ? 'border-slate-800' : 'border-slate-100' }}">
                            <a href="{{ route('contact') }}?service={{ urlencode($plan->name) }}" class="block text-center w-full py-3.5 rounded-xl text-xs font-bold transition-all {{ $plan->is_popular ? 'bg-emerald-500 hover:bg-emerald-400 text-slate-950 shadow-lg shadow-emerald-500/25' : 'bg-slate-900 hover:bg-emerald-600 text-white' }}">
                                {{ $plan->cta_text }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Bundle Advantage Callout (Section 4.5) -->
            <div class="mt-16 p-8 lg:p-10 rounded-3xl bg-slate-900 text-white border border-slate-800 shadow-2xl relative overflow-hidden" id="bundle">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8 space-y-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-bold border border-emerald-500/30">
                            Section 4.5 • Bundle Advantage
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white tracking-tight">
                            Why Combine Software, Web & Marketing With Sathi IT?
                        </h3>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Because Sathi IT delivers software, web, and marketing from one team, clients who combine services avoid the coordination gaps and inconsistent branding that come from hiring separate vendors — and can be offered a bundle rate as an incentive to work with us across multiple services.
                        </p>
                    </div>
                    <div class="lg:col-span-4 text-center lg:text-right">
                        <a href="{{ route('contact') }}?service=Full+Digital+Bundle" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-sm shadow-xl shadow-emerald-500/25 transition-all">
                            <span>Inquire for Bundle Rate</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
