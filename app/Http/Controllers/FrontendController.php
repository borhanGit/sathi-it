<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $featuredPortfolios = Portfolio::where('is_featured', true)->orderBy('sort_order')->take(3)->get();
        if ($featuredPortfolios->isEmpty()) {
            $featuredPortfolios = Portfolio::orderBy('sort_order')->take(3)->get();
        }
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order')->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order')->take(5)->get();
        $posts = Post::where('is_published', true)->orderByDesc('published_at')->take(3)->get();

        return view('pages.home', compact('services', 'featuredPortfolios', 'pricingPlans', 'faqs', 'posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.services', compact('services', 'pricingPlans'));
    }

    public function serviceDetail(string $slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedPortfolios = Portfolio::where('category', str_contains($service->title, 'Software') ? 'Software' : (str_contains($service->title, 'Website') ? 'Website' : 'Marketing'))->take(3)->get();
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.service-detail', compact('service', 'relatedPortfolios', 'pricingPlans'));
    }

    public function portfolio(Request $request)
    {
        $category = $request->query('category');
        $query = Portfolio::query()->orderBy('sort_order');

        if ($category && in_array($category, ['Software', 'Website', 'Marketing'])) {
            $query->where('category', $category);
        }

        $portfolios = $query->get();
        $categories = ['Software', 'Website', 'Marketing'];

        return view('pages.portfolio', compact('portfolios', 'category', 'categories'));
    }

    public function portfolioDetail(string $slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        $related = Portfolio::where('id', '!=', $portfolio->id)
            ->where('category', $portfolio->category)
            ->take(2)
            ->get();
        return view('pages.portfolio-detail', compact('portfolio', 'related'));
    }

    public function pricing()
    {
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.pricing', compact('pricingPlans'));
    }

    public function blog(Request $request)
    {
        $category = $request->query('category');
        $query = Post::where('is_published', true)->orderByDesc('published_at');

        if ($category) {
            $query->where('category', $category);
        }

        $posts = $query->paginate(9)->withQueryString();
        $featuredPost = Post::where('is_published', true)->where('is_featured', true)->first();
        $categories = Post::where('is_published', true)->select('category')->distinct()->pluck('category');

        return view('pages.blog.index', compact('posts', 'featuredPost', 'categories', 'category'));
    }

    public function blogDetail(string $slug)
    {
        $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $recentPosts = Post::where('id', '!=', $post->id)
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->take(3)
            ->get();
        return view('pages.blog.show', compact('post', 'recentPosts'));
    }

    public function faq()
    {
        $faqs = Faq::where('is_active', true)->orderBy('sort_order')->get();
        $categories = Faq::where('is_active', true)->select('category')->distinct()->pluck('category');
        return view('pages.faq', compact('faqs', 'categories'));
    }

    public function contact()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.contact', compact('services'));
    }
}
