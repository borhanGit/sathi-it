@extends('layouts.admin')

@section('title', 'Services Manager')
@section('page_title', 'Services Management')

@section('content')

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-500">Manage the core solutions displayed on the Sathi IT website.</p>
            </div>
            <a href="{{ route('admin.services.create') }}" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition-colors">
                + Add New Service
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                    <tr>
                        <th class="p-4">Service</th>
                        <th class="p-4">Starting Price</th>
                        <th class="p-4">Badge</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($services as $svc)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-900 text-sm">{{ $svc->title }}</div>
                                <div class="text-slate-500 text-[11px] truncate max-w-xs">{{ $svc->tagline }}</div>
                            </td>
                            <td class="p-4 font-bold text-slate-900">
                                <div>{{ $svc->formatted_price }}</div>
                                <span class="text-[10px] text-slate-400 font-normal">{{ $svc->price_unit }}</span>
                            </td>
                            <td class="p-4">
                                @if($svc->badge)
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">{{ $svc->badge }}</span>
                                @else
                                    <span class="text-slate-400 text-[11px]">—</span>
                                @endif
                            </td>
                            <td class="p-4">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold {{ $svc->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                                    {{ $svc->is_active ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.services.edit', $svc->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-[11px]">
                                    Edit
                                </a>
                                <form action="{{ route('admin.services.destroy', $svc->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this service?')">
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
                            <td colspan="5" class="p-8 text-center text-slate-400">
                                No services found. Click "Add New Service" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
