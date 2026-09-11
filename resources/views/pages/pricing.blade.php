@extends('layouts.app')

@section('title', 'Pricing Packages — Sathi IT | Clear, Transparent Rates')

@section('meta_description', 'Clear, transparent pricing for software, website development, and digital marketing. Starting packages from ৳10,000.')

@section('content')

    <!-- Pricing Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Honest Rates
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Clear Pricing. <br class="hidden sm:inline" />
                <span class="text-emerald-400">Zero Hidden</span> Fees.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                You always know what you're paying for, the delivery timeline, and the expected business outcome before we write a single line of code.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pricingPlans as $plan)
                    <div class="rounded-3xl p-7 border flex flex-col justify-between transition-all duration-300 {{ $plan->is_popular ? 'bg-slate-900 text-white border-slate-800 shadow-2xl relative' : 'bg-white text-slate-900 border-slate-200/80 shadow-sm hover:shadow-xl' }}">
                        @if($plan->is_popular)
                            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-emerald-500 text-slate-950 text-[10px] font-extrabold uppercase px-3 py-1 rounded-full tracking-wider shadow-md">
                                Recommended
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

            <!-- Notes from Doc -->
            <div class="mt-8 text-center text-xs text-slate-500">
                <p>Note: Prices above are starting/reference points based on current internal pricing. Final scope, billing frequency, and milestones will be confirmed in a written statement of work prior to kicking off.</p>
            </div>

            <!-- Bundle Incentive -->
            <div class="mt-16 p-8 rounded-3xl bg-white border border-slate-200/80 shadow-md flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full">Bundle Advantage</span>
                    <h3 class="text-xl font-black text-slate-900">Looking to Combine Software, Web & Marketing?</h3>
                    <p class="text-xs text-slate-600 max-w-xl">
                        Clients who hire Sathi IT across two or more pillars get synchronized development, one point of contact, and custom bundle discounts.
                    </p>
                </div>
                <a href="{{ route('contact') }}?service=Bundle+Package" class="shrink-0 px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-xs shadow-md transition-colors">
                    Request Bundle Consultation
                </a>
            </div>
        </div>
    </section>

@endsection
