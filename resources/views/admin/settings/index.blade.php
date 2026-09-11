@extends('layouts.admin')

@section('title', 'Site Settings')
@section('page_title', 'Brand & Website Settings')

@section('content')

    <div class="max-w-4xl bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-8">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
            @csrf

            <!-- General Company Details -->
            <div class="space-y-4">
                <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-600 border-b border-slate-100 pb-2">
                    Company Information
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="site_name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Company / Brand Name</label>
                        <input type="text" id="site_name" name="site_name" value="{{ old('site_name', $settings['site_name'] ?? 'Sathi IT') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="site_tagline" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Official Tagline</label>
                        <input type="text" id="site_tagline" name="site_tagline" value="{{ old('site_tagline', $settings['site_tagline'] ?? 'Your Business IT and Growth Partner') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label for="site_email" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Support Email</label>
                        <input type="email" id="site_email" name="site_email" value="{{ old('site_email', $settings['site_email'] ?? 'contact@sathiit.com') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="site_phone" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Support Phone</label>
                        <input type="text" id="site_phone" name="site_phone" value="{{ old('site_phone', $settings['site_phone'] ?? '+880 1700-000000') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="site_address" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Location / City</label>
                        <input type="text" id="site_address" name="site_address" value="{{ old('site_address', $settings['site_address'] ?? 'Dhaka, Bangladesh') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                </div>
            </div>

            <!-- Home Page Hero Copy -->
            <div class="space-y-4">
                <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-600 border-b border-slate-100 pb-2">
                    Hero Section Copy
                </h3>
                <div>
                    <label for="hero_headline" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Hero Headline</label>
                    <input type="text" id="hero_headline" name="hero_headline" value="{{ old('hero_headline', $settings['hero_headline'] ?? 'Your Business, IT and Growth Partner') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                </div>
                <div>
                    <label for="hero_subheadline" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Hero Sub-Headline</label>
                    <textarea id="hero_subheadline" name="hero_subheadline" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('hero_subheadline', $settings['hero_subheadline'] ?? 'Sathi IT builds the software, websites, and marketing your business needs to grow — and stays with you as a partner, not just a vendor.') }}</textarea>
                </div>
                <div>
                    <label for="hero_body" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Hero Body Narrative</label>
                    <textarea id="hero_body" name="hero_body" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('hero_body', $settings['hero_body'] ?? "Most businesses don't fail because the idea is wrong — they get stuck because they don't have the right technology, the right marketing, or someone honest to guide them.") }}</textarea>
                </div>
            </div>

            <!-- Closing CTA Band -->
            <div class="space-y-4">
                <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-600 border-b border-slate-100 pb-2">
                    Closing CTA Band
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="cta_band_title" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">CTA Band Title</label>
                        <input type="text" id="cta_band_title" name="cta_band_title" value="{{ old('cta_band_title', $settings['cta_band_title'] ?? 'Ready to stop getting stuck and start scaling?') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="cta_band_desc" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">CTA Band Subtitle</label>
                        <input type="text" id="cta_band_desc" name="cta_band_desc" value="{{ old('cta_band_desc', $settings['cta_band_desc'] ?? "Let's talk about where your business is — and where it can go.") }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div class="space-y-4">
                <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-600 border-b border-slate-100 pb-2">
                    Social & Direct Channels
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label for="facebook_url" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Facebook URL</label>
                        <input type="url" id="facebook_url" name="facebook_url" value="{{ old('facebook_url', $settings['facebook_url'] ?? 'https://facebook.com/sathiit') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="linkedin_url" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">LinkedIn URL</label>
                        <input type="url" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url', $settings['linkedin_url'] ?? 'https://linkedin.com/company/sathiit') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                    <div>
                        <label for="whatsapp_number" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">WhatsApp Direct Number</label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', $settings['whatsapp_number'] ?? '+8801700000000') }}" placeholder="+8801700000000" class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 text-sm">
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-end">
                <button type="submit" class="px-8 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md">
                    Save Site Settings
                </button>
            </div>
        </form>
    </div>

@endsection
