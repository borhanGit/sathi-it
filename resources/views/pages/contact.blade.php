@extends('layouts.app')

@section('title', 'Contact Us — Sathi IT | Let’s Talk About Your Business')

@section('meta_description', 'Whether you need software, a website, marketing, or you’re just not sure where to start — reach out to Sathi IT for honest guidance.')

@section('content')

    <!-- Contact Hero -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero-glow opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/15 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Get In Touch
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight">
                Let’s Talk About <br class="hidden sm:inline" />
                <span class="text-emerald-400">Your Business</span>.
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Whether you need software, a website, marketing, or you're just not sure where to start — reach out. We'll listen first, then tell you honestly what your business actually needs.
            </p>
        </div>
    </section>

    <!-- Form & Info Section -->
    <section class="py-20 bg-slate-50 min-h-[700px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Form -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/80 shadow-xl">
                    <h2 class="text-2xl font-black text-slate-900 mb-2">Request a Free Consultation</h2>
                    <p class="text-xs text-slate-500 mb-8">Fill in your details below and a Sathi IT advisor will review your business requirements within 24 hours.</p>

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-5" id="consultation-form">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="e.g. Tanvir Ahmed" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                            @error('name') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Email & Phone -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="tanvir@company.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                                @error('email') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Phone / WhatsApp *</label>
                                <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="+880 1712-345678" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                                @error('phone') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Service Interested In -->
                        @php $preselected = request()->query('service'); @endphp
                        <div>
                            <label for="service_interested" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Service Interested In *</label>
                            <select id="service_interested" name="service_interested" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm bg-white">
                                <option value="" disabled {{ empty($preselected) ? 'selected' : '' }}>Select your primary interest</option>
                                <option value="Custom Software (BMS)" {{ $preselected === 'Custom Software (BMS)' ? 'selected' : '' }}>Custom Software (BMS — Business Management System)</option>
                                <option value="Website Development" {{ $preselected === 'Website Development' ? 'selected' : '' }}>Website Development (Fast, SEO-ready Laravel Site)</option>
                                <option value="Digital Marketing" {{ $preselected === 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing (SEO, Social, Paid Funnels)</option>
                                <option value="Full Digital Bundle" {{ $preselected === 'Full Digital Bundle' || $preselected === 'Bundle Package' ? 'selected' : '' }}>Full Digital Bundle (Software + Web + Marketing)</option>
                                <option value="Not Sure / Need Guidance" {{ $preselected === 'Not Sure' ? 'selected' : '' }}>Not Sure / Need Guidance on Where to Start</option>
                            </select>
                            @error('service_interested') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Budget Range (Optional) -->
                        <div>
                            <label for="budget" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Estimated Budget (Optional)</label>
                            <select id="budget" name="budget" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm bg-white">
                                <option value="৳10,000 - ৳25,000">৳10,000 - ৳25,000 (Starter module / SEO)</option>
                                <option value="৳25,000 - ৳50,000">৳25,000 - ৳50,000 (Full Website / Growth)</option>
                                <option value="৳50,000 - ৳1,00,000+">৳50,000 - ৳1,00,000+ (Multi-Module BMS / Bundle)</option>
                                <option value="Flexible / Need Assessment">Flexible / Need Assessment First</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Tell Us About Your Business & Challenge *</label>
                            <textarea id="message" name="message" rows="4" required placeholder="What operational bottlenecks or marketing challenges are you facing right now?" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('message') }}</textarea>
                            @error('message') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" class="w-full py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-black text-sm shadow-xl shadow-emerald-600/25 transition-all">
                                Send Consultation Request &rarr;
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right: Contact Cards -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-xl border border-slate-800 space-y-6">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">Direct Communication</span>
                            <h3 class="text-xl font-black text-white mt-1">Our Accountability Promise</h3>
                            <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                                We guide before we sell. Even if our recommendation is that you don't need any new software right now, we will give you straight answers.
                            </p>
                        </div>

                        <div class="space-y-4 pt-4 border-t border-slate-800 text-xs">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-slate-800 text-emerald-400 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-white">Physical Location</p>
                                    <p class="text-slate-400">Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-slate-800 text-emerald-400 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-white">Official Email</p>
                                    <a href="mailto:contact@sathiit.com" class="text-emerald-400 hover:underline">contact@sathiit.com</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-slate-800 text-emerald-400 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-white">Phone & WhatsApp Hotline</p>
                                    <p class="text-slate-400">+880 1700-000000</p>
                                </div>
                            </div>
                        </div>

                        <!-- Instant WhatsApp Button -->
                        <div class="pt-4 border-t border-slate-800">
                            <a href="https://wa.me/8801700000000" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 w-full py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs shadow-md transition-colors">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.159.57 4.185 1.564 5.939l-1.564 5.829 5.961-1.564c1.713.934 3.673 1.464 5.759 1.464 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z"/></svg>
                                <span>Fast Track via WhatsApp Chat</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
