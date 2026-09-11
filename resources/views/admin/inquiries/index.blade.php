@extends('layouts.admin')

@section('title', 'Inquiries & Leads')
@section('page_title', 'Lead Inquiries & Consultations')

@section('content')

    <div class="space-y-6">
        <!-- Status Filter Pills -->
        <div class="flex flex-wrap items-center gap-2">
            <a href="{{ route('admin.inquiries.index') }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-colors {{ empty($status) ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                All Leads ({{ $counts['all'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-colors {{ $status === 'new' ? 'bg-emerald-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                New ({{ $counts['new'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'in_discussion']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-colors {{ $status === 'in_discussion' ? 'bg-blue-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                In Discussion ({{ $counts['in_discussion'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'resolved']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-colors {{ $status === 'resolved' ? 'bg-purple-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                Resolved ({{ $counts['resolved'] }})
            </a>
            <a href="{{ route('admin.inquiries.index', ['status' => 'closed']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-colors {{ $status === 'closed' ? 'bg-slate-700 text-white' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                Closed ({{ $counts['closed'] }})
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                    <tr>
                        <th class="p-4">Client</th>
                        <th class="p-4">Contact</th>
                        <th class="p-4">Service</th>
                        <th class="p-4">Budget</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Submitted</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($inquiries as $inq)
                        <tr class="hover:bg-slate-50/80 transition-colors {{ $inq->status === 'new' ? 'bg-emerald-50/30' : '' }}">
                            <td class="p-4">
                                <div class="font-bold text-slate-900 text-sm">{{ $inq->name }}</div>
                            </td>
                            <td class="p-4 text-slate-600">
                                <div>{{ $inq->email }}</div>
                                <div class="font-mono text-[11px] text-slate-500">{{ $inq->phone }}</div>
                            </td>
                            <td class="p-4 font-semibold text-slate-800">
                                {{ $inq->service_interested }}
                            </td>
                            <td class="p-4 text-slate-600">
                                {{ $inq->budget ?? 'Flexible' }}
                            </td>
                            <td class="p-4">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase {{ $inq->status === 'new' ? 'bg-emerald-100 text-emerald-800' : ($inq->status === 'in_discussion' ? 'bg-blue-100 text-blue-800' : ($inq->status === 'resolved' ? 'bg-purple-100 text-purple-800' : 'bg-slate-100 text-slate-700')) }}">
                                    {{ str_replace('_', ' ', $inq->status) }}
                                </span>
                            </td>
                            <td class="p-4 text-slate-500">{{ $inq->created_at->diffForHumans() }}</td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-900 hover:bg-emerald-600 text-white font-bold text-[11px] transition-colors">
                                    View Details
                                </a>
                                <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this inquiry record?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1.5 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-700 font-bold text-[11px]">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-slate-400">
                                No inquiries match this filter.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $inquiries->links() }}
        </div>
    </div>

@endsection
