@extends('layouts.admin')

@section('title', 'Pricing Packages')
@section('page_title', 'Pricing Tiers Management')

@section('content')

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <p class="text-xs text-slate-500">Configure starting prices (৳ BDT) and included feature lists.</p>
            <a href="{{ route('admin.pricing.create') }}" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition-colors">
                + Add Pricing Plan
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                    <tr>
                        <th class="p-4">Package Name</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Billing Cycle</th>
                        <th class="p-4">Popular</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($plans as $plan)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-900 text-sm">{{ $plan->name }}</div>
                                <div class="text-slate-500 text-[11px] truncate max-w-xs">{{ $plan->description }}</div>
                            </td>
                            <td class="p-4">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-slate-100 text-slate-800">{{ $plan->category }}</span>
                            </td>
                            <td class="p-4 font-black text-slate-900 text-sm">{{ $plan->price }}</td>
                            <td class="p-4 text-slate-600">{{ $plan->billing_cycle }}</td>
                            <td class="p-4">
                                @if($plan->is_popular)
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Yes</span>
                                @else
                                    <span class="text-slate-400 text-[11px]">No</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.pricing.edit', $plan->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-[11px]">
                                    Edit
                                </a>
                                <form action="{{ route('admin.pricing.destroy', $plan->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this pricing plan?')">
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
                            <td colspan="6" class="p-8 text-center text-slate-400">
                                No pricing packages created yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
