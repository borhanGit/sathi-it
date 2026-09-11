@extends('layouts.admin')

@section('title', 'Inquiry Details — ' . $inquiry->name)
@section('page_title', 'Inquiry from ' . $inquiry->name)

@section('content')

    <div class="max-w-4xl space-y-6">
        <a href="{{ route('admin.inquiries.index') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-500 hover:text-slate-800">
            &larr; Back to Inquiries List
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left 2 Cols: Details -->
            <div class="lg:col-span-2 bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
                <div class="border-b border-slate-100 pb-4 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-black text-slate-900">{{ $inquiry->name }}</h3>
                        <p class="text-xs text-slate-400">Received {{ $inquiry->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase {{ $inquiry->status === 'new' ? 'bg-emerald-100 text-emerald-800' : ($inquiry->status === 'in_discussion' ? 'bg-blue-100 text-blue-800' : ($inquiry->status === 'resolved' ? 'bg-purple-100 text-purple-800' : 'bg-slate-100 text-slate-700')) }}">
                        {{ str_replace('_', ' ', $inquiry->status) }}
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-4 text-xs">
                    <div>
                        <span class="text-slate-400 font-semibold uppercase">Email</span>
                        <div class="font-bold text-slate-900 mt-0.5"><a href="mailto:{{ $inquiry->email }}" class="text-emerald-600 hover:underline">{{ $inquiry->email }}</a></div>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold uppercase">Phone / WhatsApp</span>
                        <div class="font-bold text-slate-900 mt-0.5"><a href="tel:{{ $inquiry->phone }}" class="hover:underline">{{ $inquiry->phone }}</a></div>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold uppercase">Service Requested</span>
                        <div class="font-bold text-slate-900 mt-0.5">{{ $inquiry->service_interested }}</div>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold uppercase">Estimated Budget</span>
                        <div class="font-bold text-slate-900 mt-0.5">{{ $inquiry->budget ?? 'Flexible' }}</div>
                    </div>
                </div>

                <div>
                    <span class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Message / Business Requirements</span>
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 leading-relaxed">
                        {!! nl2br(e($inquiry->message)) !!}
                    </div>
                </div>

                <!-- Direct WhatsApp / Email Action Links -->
                <div class="flex flex-wrap gap-3 pt-2">
                    @php
                        $cleanPhone = preg_replace('/[^0-9]/', '', $inquiry->phone);
                        $whatsappUrl = "https://wa.me/{$cleanPhone}?text=" . urlencode("Hello {$inquiry->name}, this is Sathi IT regarding your consultation inquiry on {$inquiry->service_interested}.");
                    @endphp
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs flex items-center gap-2 shadow-sm transition-colors">
                        <span>Message on WhatsApp</span>
                    </a>
                    <a href="mailto:{{ $inquiry->email }}?subject=Sathi IT Consultation: {{ urlencode($inquiry->service_interested) }}" class="px-4 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs flex items-center gap-2 shadow-sm transition-colors">
                        <span>Reply by Email</span>
                    </a>
                </div>
            </div>

            <!-- Right 1 Col: Status & Internal Notes -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                <h4 class="font-bold text-slate-900 text-sm">Lead Status & Notes</h4>

                <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label for="status" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Pipeline Status</label>
                        <select id="status" name="status" class="w-full px-3 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold focus:ring-2 focus:ring-emerald-500 bg-white">
                            <option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>New</option>
                            <option value="in_discussion" {{ $inquiry->status === 'in_discussion' ? 'selected' : '' }}>In Discussion</option>
                            <option value="resolved" {{ $inquiry->status === 'resolved' ? 'selected' : '' }}>Resolved (Won/Converted)</option>
                            <option value="closed" {{ $inquiry->status === 'closed' ? 'selected' : '' }}>Closed (Archived)</option>
                        </select>
                    </div>

                    <div>
                        <label for="admin_notes" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">Internal Notes</label>
                        <textarea id="admin_notes" name="admin_notes" rows="6" placeholder="Add confidential notes on client discussion, estimated quote, or next follow-up date..." class="w-full px-3 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-emerald-500">{{ old('admin_notes', $inquiry->admin_notes) }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-2.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold text-xs transition-colors">
                        Save Status & Notes
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
