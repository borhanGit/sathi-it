<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sathi IT — Your Business IT and Growth Partner')</title>
    <meta name="description" content="@yield('meta_description', 'Sathi IT is a complete digital solutions partner for small and medium businesses. We provide custom software, websites, and digital marketing under one roof.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('uploads/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-emerald-500 selection:text-white min-h-screen flex flex-col justify-between">

    <!-- Top Announcement Bar -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                    Trusted IT Partner
                </span>
                <span>Guidance first, transparent pricing, and dependable scaling for SMEs.</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="mailto:contact@sathiit.com" class="hover:text-emerald-400 transition-colors flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>contact@sathiit.com</span>
                </a>
                <span class="text-slate-600">|</span>
                <span class="flex items-center gap-1">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                    <span class="text-slate-300">Dhaka, Bangladesh</span>
                </span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('uploads/logo.png') }}" alt="Sathi IT Logo" class="h-11 w-auto object-contain group-hover:scale-105 transition-transform duration-300">
                    <div class="flex flex-col">
                        <span class="text-xl font-black tracking-tight text-slate-900 group-hover:text-emerald-600 transition-colors">
                            Sathi <span class="text-emerald-600">IT</span>
                        </span>
                        <span class="text-[10px] uppercase font-bold tracking-widest text-slate-400 -mt-1">Digital Partner</span>
                    </div>
                </a>

                <!-- Desktop Menu Items -->
                <nav class="hidden lg:flex items-center gap-1 font-medium text-sm text-slate-600">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('home') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('about') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">About Us</a>
                    <a href="{{ route('services') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('services*') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Services</a>
                    <a href="{{ route('portfolio') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('portfolio*') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Portfolio</a>
                    <a href="{{ route('pricing') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('pricing') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Pricing</a>
                    <a href="{{ route('blog') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('blog*') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Blog</a>
                    <a href="{{ route('faq') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('faq') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">FAQ</a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg hover:text-emerald-600 hover:bg-emerald-50/60 transition-all {{ request()->routeIs('contact') ? 'text-emerald-600 font-semibold bg-emerald-50/80' : '' }}">Contact</a>
                </nav>

                <!-- Action Button & Mobile Toggle -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-900 text-white hover:bg-emerald-600 text-sm font-semibold shadow-sm hover:shadow-lg hover:shadow-emerald-600/25 transition-all duration-300">
                        <span>Get Free Consultation</span>
                        <svg class="w-4 h-4 text-emerald-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button type="button" id="mobile-menu-toggle" aria-label="Toggle navigation" class="lg:hidden p-2 rounded-xl text-slate-700 hover:bg-slate-100 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Drawer -->
            <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200/80 py-4 bg-white/95 backdrop-blur-md px-2 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">About Us</a>
                <a href="{{ route('services') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Services</a>
                <a href="{{ route('portfolio') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Portfolio & Case Studies</a>
                <a href="{{ route('pricing') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Pricing Packages</a>
                <a href="{{ route('blog') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Blog / Knowledge Hub</a>
                <a href="{{ route('faq') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">FAQ</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">Contact Us</a>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="block text-center w-full px-4 py-3 rounded-xl bg-emerald-600 text-white text-sm font-semibold shadow-md">
                        Get Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Global Flash Messages -->
    @if(session('success'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-5 py-4 rounded-xl flex items-center justify-between shadow-sm animate-fade-in">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="font-medium text-sm">{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 text-lg leading-none">&times;</button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-rose-50 border border-rose-200 text-rose-800 px-5 py-4 rounded-xl flex items-center justify-between shadow-sm animate-fade-in">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-rose-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="font-medium text-sm">{{ session('error') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-rose-600 hover:text-rose-900 text-lg leading-none">&times;</button>
            </div>
        </div>
    @endif

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Floating Quick Consultation CTA -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3">
        <a href="{{ route('contact') }}" class="group flex items-center gap-3 bg-slate-900 text-white pl-4 pr-5 py-3 rounded-full shadow-2xl hover:bg-emerald-600 hover:shadow-emerald-600/30 transition-all duration-300 border border-slate-700/60">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
            <span class="text-xs font-bold tracking-wide uppercase">Talk To Us</span>
            <svg class="w-4 h-4 text-emerald-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </a>
    </div>

    <!-- Main Footer -->
    <footer class="bg-slate-950 text-slate-400 border-t border-slate-800/80 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800/80">
                <!-- Col 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('uploads/logo.png') }}" alt="Sathi IT Logo" class="h-10 w-auto object-contain brightness-110 group-hover:scale-105 transition-transform duration-300">
                        <span class="text-2xl font-black tracking-tight text-white group-hover:text-emerald-400 transition-colors">
                            Sathi <span class="text-emerald-500">IT</span>
                        </span>
                    </a>
                    <p class="text-sm text-slate-400 max-w-sm leading-relaxed">
                        "Your Business IT and Growth Partner." We guide business owners first, build for them second, and stay transparent throughout — from software to websites to marketing.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-emerald-400 hover:border-emerald-500/50 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-emerald-400 hover:border-emerald-500/50 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Core Services -->
                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Core Services</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('services.show', 'custom-software-bms') }}" class="hover:text-emerald-400 transition-colors">Custom Software (BMS)</a></li>
                        <li><a href="{{ route('services.show', 'website-development') }}" class="hover:text-emerald-400 transition-colors">Website Development</a></li>
                        <li><a href="{{ route('services.show', 'digital-marketing') }}" class="hover:text-emerald-400 transition-colors">Digital Marketing</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-emerald-400 transition-colors">Starting Packages (৳10K+)</a></li>
                        <li><a href="{{ route('services') }}#bundle" class="hover:text-emerald-400 transition-colors">The Bundle Advantage</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company -->
                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Company</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-emerald-400 transition-colors">Our Story & Mission</a></li>
                        <li><a href="{{ route('about') }}#values" class="hover:text-emerald-400 transition-colors">Core Values</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-emerald-400 transition-colors">Case Studies</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-emerald-400 transition-colors">Blog & Guides</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-emerald-400 transition-colors">Frequently Asked Questions</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Office -->
                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Direct Contact</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Dhaka, Bangladesh</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:contact@sathiit.com" class="hover:text-emerald-400 transition-colors">contact@sathiit.com</a>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+880 1700-000000</span>
                        </li>
                        <li class="pt-2">
                            <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-400 hover:text-emerald-300">
                                <span>Schedule Consultation &rarr;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright & Back-Office Link -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} Sathi IT. All rights reserved. Built on Laravel 13.</p>
                <div class="flex items-center gap-4">
                    <a href="{{ route('faq') }}" class="hover:text-slate-400">FAQs</a>
                    <span>•</span>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400">Privacy & Terms</a>
                    <span>•</span>
                    <a href="{{ route('admin.login') }}" class="text-slate-600 hover:text-emerald-400 transition-colors flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <span>Admin CMS Portal</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu Toggle
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            if (toggleBtn && mobileMenu) {
                toggleBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Accordion Logic
            document.querySelectorAll('.faq-toggle').forEach(btn => {
                btn.addEventListener('click', () => {
                    const item = btn.closest('.faq-item');
                    const isActive = item.classList.contains('active');
                    
                    // Close other items in same group
                    item.parentElement.querySelectorAll('.faq-item').forEach(el => {
                        el.classList.remove('active');
                    });

                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
