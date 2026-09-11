@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Executive CMS Overview')

@section('content')

    <div class="space-y-8">
        <!-- Metrics Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Leads -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Inquiries / Leads</span>
                    <div class="text-3xl font-black text-slate-900 mt-1">{{ $stats['total_inquiries'] }}</div>
                    @if($stats['new_inquiries'] > 0)
                        <span class="inline-block mt-2 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800">
                            {{ $stats['new_inquiries'] }} New Awaiting Review
                        </span>
                    @else
                        <span class="inline-block mt-2 text-[11px] text-slate-400 font-medium">All caught up</span>
                    @endif
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>

            <!-- Services -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Active Services</span>
                    <div class="text-3xl font-black text-slate-900 mt-1">{{ $stats['total_services'] }}</div>
                    <a href="{{ route('admin.services.index') }}" class="inline-block mt-2 text-xs font-bold text-emerald-600 hover:underline">Manage Services &rarr;</a>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </div>
            </div>

            <!-- Case Studies -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Case Studies</span>
                    <div class="text-3xl font-black text-slate-900 mt-1">{{ $stats['total_portfolios'] }}</div>
                    <a href="{{ route('admin.portfolios.index') }}" class="inline-block mt-2 text-xs font-bold text-emerald-600 hover:underline">Manage Portfolio &rarr;</a>
                </div>
                <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
            </div>

            <!-- Articles -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Blog Articles</span>
                    <div class="text-3xl font-black text-slate-900 mt-1">{{ $stats['total_posts'] }}</div>
                    <a href="{{ route('admin.posts.index') }}" class="inline-block mt-2 text-xs font-bold text-emerald-600 hover:underline">Manage Articles &rarr;</a>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
            </div>
        </div>

        <!-- Quick Launch CMS Bar -->
        <div class="p-6 rounded-2xl bg-slate-900 text-white flex flex-wrap items-center justify-between gap-4">
            <div>
                <h3 class="font-bold text-base">Quick Content Creator</h3>
                <p class="text-xs text-slate-400">Publish new offerings or client case studies instantly</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.services.create') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-xs font-bold text-slate-200 border border-slate-700 transition-colors">
                    + New Service
                </a>
                <a href="{{ route('admin.portfolios.create') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-xs font-bold text-slate-200 border border-slate-700 transition-colors">
                    + New Case Study
                </a>
                <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-xs font-bold text-slate-950 transition-colors">
                    + New Article
                </a>
            </div>
        </div>

        <!-- Recent Inquiries Section -->
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-base text-slate-900">Recent Lead Inquiries</h3>
                    <p class="text-xs text-slate-500">Prospective clients requesting guidance & consultations</p>
                </div>
                <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-bold text-emerald-600 hover:underline">
                    View All Inquiries &rarr;
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                        <tr>
                            <th class="p-4">Client Name</th>
                            <th class="p-4">Service</th>
                            <th class="p-4">Contact</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Date</th>
                            <th class="p-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($recentInquiries as $inq)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="p-4 font-bold text-slate-900">{{ $inq->name }}</td>
                                <td class="p-4 font-medium text-slate-700">{{ $inq->service_interested }}</td>
                                <td class="p-4 text-slate-500">
                                    <div>{{ $inq->email }}</div>
                                    <div class="font-mono text-[11px]">{{ $inq->phone }}</div>
                                </td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase {{ $inq->status === 'new' ? 'bg-emerald-100 text-emerald-800' : ($inq->status === 'in_discussion' ? 'bg-blue-100 text-blue-800' : 'bg-slate-100 text-slate-700') }}">
                                        {{ $inq->status }}
                                    </span>
                                </td>
                                <td class="p-4 text-slate-500">{{ $inq->created_at->diffForHumans() }}</td>
                                <td class="p-4 text-right">
                                    <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-900 text-white font-bold text-[11px] hover:bg-emerald-600 transition-colors">
                                        Inspect Lead
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-8 text-center text-slate-400">
                                    No inquiries received yet. They will appear here once visitors submit the contact form.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
