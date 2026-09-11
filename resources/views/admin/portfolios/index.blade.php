@extends('layouts.admin')

@section('title', 'Case Studies Manager')
@section('page_title', 'Portfolio & Case Studies')

@section('content')

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <p class="text-xs text-slate-500">Manage your Challenge &rarr; Solution &rarr; Result client case studies.</p>
            <a href="{{ route('admin.portfolios.create') }}" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition-colors">
                + Add New Case Study
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                    <tr>
                        <th class="p-4">Project</th>
                        <th class="p-4">Client</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Featured</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($portfolios as $item)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-900 text-sm">{{ $item->title }}</div>
                                <div class="text-slate-500 text-[11px] truncate max-w-xs">{{ $item->result }}</div>
                            </td>
                            <td class="p-4 font-semibold text-slate-700">{{ $item->client_name }}</td>
                            <td class="p-4">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-slate-100 text-slate-800">
                                    {{ $item->category }}
                                </span>
                            </td>
                            <td class="p-4">
                                @if($item->is_featured)
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Featured</span>
                                @else
                                    <span class="text-slate-400 text-[11px]">Standard</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-[11px]">
                                    Edit
                                </a>
                                <form action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this case study?')">
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
                                No case studies found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
