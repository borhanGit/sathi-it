<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PricingPlan;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_inquiries' => Inquiry::count(),
            'new_inquiries' => Inquiry::where('status', 'new')->count(),
            'total_services' => Service::count(),
            'total_portfolios' => Portfolio::count(),
            'total_posts' => Post::count(),
            'total_faqs' => Faq::count(),
            'total_plans' => PricingPlan::count(),
        ];

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $recentPosts = Post::latest()->take(4)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentPosts'));
    }
}
