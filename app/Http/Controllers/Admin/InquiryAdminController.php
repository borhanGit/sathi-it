<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryAdminController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        $query = Inquiry::latest();

        if ($status && in_array($status, ['new', 'in_discussion', 'resolved', 'closed'])) {
            $query->where('status', $status);
        }

        $inquiries = $query->paginate(20)->withQueryString();
        $counts = [
            'all' => Inquiry::count(),
            'new' => Inquiry::where('status', 'new')->count(),
            'in_discussion' => Inquiry::where('status', 'in_discussion')->count(),
            'resolved' => Inquiry::where('status', 'resolved')->count(),
            'closed' => Inquiry::where('status', 'closed')->count(),
        ];

        return view('admin.inquiries.index', compact('inquiries', 'status', 'counts'));
    }

    public function show(Inquiry $inquiry)
    {
        if ($inquiry->status === 'new') {
            $inquiry->update(['status' => 'in_discussion']);
        }
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function updateStatus(Request $request, Inquiry $inquiry)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,in_discussion,resolved,closed'],
            'admin_notes' => ['nullable', 'string'],
        ]);

        $inquiry->update($validated);

        return redirect()->back()->with('success', 'Lead inquiry status updated successfully.');
    }

    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted successfully.');
    }
}
