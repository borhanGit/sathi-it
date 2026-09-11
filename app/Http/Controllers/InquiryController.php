<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:50'],
            'service_interested' => ['required', 'string', 'max:100'],
            'budget' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        $inquiry = Inquiry::create($validated);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => "Thank you, {$inquiry->name}! We have received your consultation request. A Sathi IT growth advisor will contact you within 24 hours.",
            ]);
        }

        return redirect()->back()->with('success', "Thank you, {$inquiry->name}! We have received your consultation request. A Sathi IT growth advisor will contact you within 24 hours.");
    }
}
