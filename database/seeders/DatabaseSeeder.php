<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@sathiit.com'],
            [
                'name' => 'Sathi IT Administrator',
                'password' => Hash::make('admin12345'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed Site Settings
        $settings = [
            'site_name' => 'Sathi IT',
            'site_tagline' => 'Your Business IT and Growth Partner',
            'site_email' => 'contact@sathiit.com',
            'site_phone' => '+880 1700-000000',
            'site_address' => 'Dhaka, Bangladesh',
            'hero_headline' => 'Your Business, IT and Growth Partner',
            'hero_subheadline' => 'Sathi IT builds the software, websites, and marketing your business needs to grow — and stays with you as a partner, not just a vendor.',
            'hero_body' => "Most businesses don't fail because the idea is wrong — they get stuck because they don't have the right technology, the right marketing, or someone honest to guide them. Sathi IT brings software development, website design, and digital marketing together under one roof, so you get a complete, transparent digital partner instead of juggling multiple vendors.",
            'cta_band_title' => "Ready to stop getting stuck and start scaling?",
            'cta_band_desc' => "Let's talk about where your business is — and where it can go.",
            'facebook_url' => 'https://facebook.com/sathiit',
            'linkedin_url' => 'https://linkedin.com/company/sathiit',
            'whatsapp_number' => '+8801700000000',
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val, 'group' => 'general']);
        }

        // 3. Seed Core Services
        $services = [
            [
                'title' => 'Custom Software (BMS)',
                'slug' => 'custom-software-bms',
                'tagline' => 'Business management systems built around how you actually work.',
                'icon' => 'bms',
                'short_desc' => 'Business management systems built around how you actually work. Automate manual tasks, track orders, and get real-time operational clarity.',
                'full_desc' => "A business management system built around how your business actually operates — not a rigid template you have to adapt to. We automate the repetitive, manual work that keeps owners stuck managing instead of growing.\n\nWhether you need multi-branch inventory tracking, sales automation, driver/fleet oversight, or unified billing, we architect software that fits your real processes like a glove.",
                'features' => [
                    'Inventory, sales, and order management',
                    'Staff and task management tools',
                    'Reporting dashboards for real-time visibility',
                    'Custom modules built around your specific workflow',
                    'Role-based staff permissions & audit trails',
                    'Cloud backup and data redundancy',
                ],
                'starting_price' => 10000,
                'price_unit' => 'BDT (Starter Module)',
                'badge' => 'Operational Freedom',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Website Development',
                'slug' => 'website-development',
                'tagline' => 'Fast, clean, SEO-ready websites that turn visitors into customers.',
                'icon' => 'web',
                'short_desc' => 'Fast, clean, SEO-ready websites built on Laravel that turn visitors into customers with high-converting layouts and lightning-fast speed.',
                'full_desc' => "A clean, fast, mobile-friendly website built on Laravel — designed with a crisp, accessible aesthetic, clear content, and clear calls to action, so visitors know exactly what to do next. Every website includes on-page SEO so you're discoverable from day one.\n\nWe avoid bloated builders and heavy templates, ensuring 95+ Google PageSpeed scores, military-grade security, and an intuitive back-office CMS.",
                'features' => [
                    'Custom design — no generic templates',
                    'Mobile-responsive, fast-loading pages (<1.2s)',
                    'On-page SEO setup included from day one',
                    'Built on Laravel for long-term stability and scalability',
                    'Custom CMS admin panel tailored for your staff',
                    'Secure HTTPS & spam-protected contact funnels',
                ],
                'starting_price' => 20000,
                'price_unit' => 'BDT (One-time)',
                'badge' => 'High Conversion',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'tagline' => 'Social media, SEO, and ad campaigns that bring the right people to your business.',
                'icon' => 'marketing',
                'short_desc' => 'Social media, SEO, and targeted ad campaigns that bring high-intent buyers to your business instead of vanity metrics.',
                'full_desc' => "Getting found matters as much as looking good. Our digital marketing service covers the channels that actually bring customers to small and medium businesses.\n\nWe combine organic search optimization (SEO), performance Facebook & Google advertising, and strategic content planning into a cohesive growth engine with transparent monthly reporting.",
                'features' => [
                    'Social media marketing and strategic content',
                    'Search engine optimization (SEO) for high-intent keywords',
                    'Paid ad campaigns (Facebook & Google Ads)',
                    'Monthly transparent performance and ROI reporting',
                    'Conversion rate optimization (CRO) on landing pages',
                    'Competitor & target customer research',
                ],
                'starting_price' => 20000,
                'price_unit' => 'BDT / month',
                'badge' => 'Measurable ROI',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($services as $svc) {
            Service::updateOrCreate(['slug' => $svc['slug']], $svc);
        }

        // 4. Seed Pricing Plans
        $plans = [
            [
                'name' => 'BMS Software (Starter)',
                'slug' => 'bms-software-starter',
                'category' => 'Software',
                'price' => '৳10,000',
                'price_numeric' => 10000,
                'billing_cycle' => 'Starting price',
                'description' => 'Starting price for a basic business management module tailored to your primary operational bottleneck.',
                'features' => [
                    'Core single-module system (Inventory or Sales or Invoicing)',
                    'Up to 3 user roles & staff accounts',
                    'Real-time transaction & summary dashboard',
                    'Data export to Excel & PDF invoice generation',
                    'Database setup & deployment guidance',
                    '30 days post-launch warranty & bug fixes',
                ],
                'is_popular' => false,
                'cta_text' => 'Get BMS Starter',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Website + SEO Package',
                'slug' => 'website-seo-package',
                'category' => 'Website',
                'price' => '৳20,000',
                'price_numeric' => 20000,
                'billing_cycle' => 'One-time investment',
                'description' => 'Complete high-performance Laravel website with bespoke UI, content integration, and on-page SEO.',
                'features' => [
                    'Bespoke modern UI/UX design (No cookie-cutter templates)',
                    'Up to 6 fully customized pages + CMS Admin Panel',
                    'Complete On-page SEO setup (Meta, schema, sitemap)',
                    'Mobile-first responsive engineering & smooth animations',
                    'Interactive contact lead forms & WhatsApp integration',
                    'Fast hosting configuration & SSL installation',
                    'Admin training & 60 days dedicated support',
                ],
                'is_popular' => true,
                'cta_text' => 'Launch Your Website',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Digital Marketing Package',
                'slug' => 'digital-marketing-package',
                'category' => 'Marketing',
                'price' => '৳20,000',
                'price_numeric' => 20000,
                'billing_cycle' => 'Monthly retainer',
                'description' => 'Dedicated monthly acquisition engine covering social content, paid ad campaigns, and SEO growth.',
                'features' => [
                    'Monthly Facebook & Google Ad campaign setup & management',
                    '12-16 custom branded social creatives & copywriting',
                    'Continuous local SEO keyword monitoring & optimization',
                    'Audience targeting, A/B testing & retargeting pixels',
                    'Transparent monthly KPI report (Ad spend, leads, CAC)',
                    'Bi-weekly strategy call with dedicated growth manager',
                ],
                'is_popular' => false,
                'cta_text' => 'Scale Marketing',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Custom Full Software / Complex Ecosystem',
                'slug' => 'custom-software-ecosystem',
                'category' => 'Custom',
                'price' => 'Custom Quote',
                'price_numeric' => null,
                'billing_cycle' => 'Milestone based',
                'description' => 'Priced individually based on scope, multi-branch architecture, custom API integrations, and timeline.',
                'features' => [
                    'End-to-end multi-branch ERP/BMS architecture',
                    'Custom API integrations (Payment gateways, SMS, Courier)',
                    'Advanced role permissions & departmental audits',
                    'Dedicated project manager & weekly staging sprints',
                    'Automated backup clusters & high-concurrency database',
                    'SLA-backed priority support & long-term maintenance',
                ],
                'is_popular' => false,
                'cta_text' => 'Request Custom Scope',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($plans as $plan) {
            PricingPlan::updateOrCreate(['slug' => $plan['slug']], $plan);
        }

        // 5. Seed Portfolio Case Studies
        $portfolios = [
            [
                'title' => 'Prime Logistics BMS & Fleet Manager',
                'slug' => 'prime-logistics-bms',
                'category' => 'Software',
                'client_name' => 'Prime Express Logistics',
                'challenge' => 'The client was buried under paper receipts, lost fuel logs, and delayed billing. Over 40 hours per week were wasted reconciling driver dispatches across 4 branch depots.',
                'solution' => 'Sathi IT built a centralized Laravel Business Management System (BMS) with automated trip dispatch, driver digital expense logging, and instant automated customer billing.',
                'result' => 'Eliminated 65% of manual administrative hours, reduced billing errors to under 0.2%, and cut invoice settlement cycle from 14 days to 48 hours.',
                'metrics' => [
                    ['label' => 'Admin Hours Saved', 'value' => '65%'],
                    ['label' => 'Invoice Turnaround', 'value' => '2 Days'],
                    ['label' => 'Billing Accuracy', 'value' => '99.8%'],
                ],
                'cover_image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => true,
                'sort_order' => 1,
                'live_url' => 'https://example.com/prime-logistics',
            ],
            [
                'title' => 'Nordic Heritage Brand & E-Commerce Web Platform',
                'slug' => 'nordic-heritage-web',
                'category' => 'Website',
                'client_name' => 'Nordic Heritage Lifestyle',
                'challenge' => 'Existing legacy website suffered from a 72% bounce rate, 5-second mobile load times, and poor search ranking for key retail merchandise categories.',
                'solution' => 'Engineered a modern, lightning-fast Laravel web application with pristine minimal aesthetics, sub-second page loads, and structured on-page schema SEO.',
                'result' => 'Mobile bounce rate dropped to 28%, organic search traffic surged +180% within 90 days, and online purchase conversion doubled from 1.4% to 3.2%.',
                'metrics' => [
                    ['label' => 'Organic Search Traffic', 'value' => '+180%'],
                    ['label' => 'Page Load Speed', 'value' => '0.8s'],
                    ['label' => 'Conversion Rate', 'value' => '3.2%'],
                ],
                'cover_image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => true,
                'sort_order' => 2,
                'live_url' => 'https://example.com/nordic-heritage',
            ],
            [
                'title' => 'Dhaka AgroTech Growth & B2B Lead Funnel',
                'slug' => 'dhaka-agrotech-growth',
                'category' => 'Marketing',
                'client_name' => 'Dhaka AgroTech Supplies',
                'challenge' => 'The owner had previously spent money on unguided social boosts with freelancers who vanished without delivering traceable sales leads or clear reports.',
                'solution' => 'Constructed high-converting B2B landing pages backed by tightly targeted Google Search campaigns and Facebook retargeting for commercial farm owners.',
                'result' => 'Generated 140+ qualified wholesale purchasing inquiries per month at 42% lower cost per lead, yielding a verified 4.8x Return on Ad Spend (ROAS).',
                'metrics' => [
                    ['label' => 'ROAS Achieved', 'value' => '4.8x'],
                    ['label' => 'Cost Per Lead', 'value' => '-42%'],
                    ['label' => 'Monthly B2B Leads', 'value' => '140+'],
                ],
                'cover_image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => true,
                'sort_order' => 3,
                'live_url' => 'https://example.com/agrotech',
            ],
            [
                'title' => 'Medikart Retail Inventory & Point of Sale',
                'slug' => 'medikart-retail-pos',
                'category' => 'Software',
                'client_name' => 'Medikart Pharmacy Chain',
                'challenge' => 'Frequent stockouts, untracked batch expirations, and stock discrepancy across three branch outlets due to disjointed Excel sheets.',
                'solution' => 'Deployed an interconnected custom BMS inventory system with batch expiry alerts, barcode scanner integration, and automated reorder points.',
                'result' => 'Reduced expired stock losses by 85% and cut branch inventory audit time from 3 full days to 45 minutes.',
                'metrics' => [
                    ['label' => 'Expiry Waste Cut', 'value' => '85%'],
                    ['label' => 'Audit Speed', 'value' => '45 Min'],
                ],
                'cover_image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => false,
                'sort_order' => 4,
                'live_url' => null,
            ],
        ];

        foreach ($portfolios as $item) {
            Portfolio::updateOrCreate(['slug' => $item['slug']], $item);
        }

        // 6. Seed Blog Posts
        $posts = [
            [
                'title' => 'Why We Started Sathi IT — And Who It’s Really For',
                'slug' => 'why-we-started-sathi-it',
                'category' => 'Brand Story',
                'excerpt' => 'Too many business owners get burned by agencies who overpromise and vanish. Here is why we built Sathi IT as a transparent partner first.',
                'content' => "Many small and medium-sized businesses reach a certain level and get stuck there. The owner is buried in day-to-day operations, lacks the technical knowledge to make informed decisions, and often ends up misled — or even scammed — by agencies and freelancers who don't deliver what was promised.

Sathi IT was built to be different — a partner that guides before it builds, stays transparent throughout, and takes real responsibility for outcomes, not just deliverables. We're starting locally, working closely with businesses we understand, and using that real-world experience to grow into a team that can serve businesses globally.

### The 4 Pillars That Guide Every Engagement:
1. **Guidance Before Selling**: We advise honestly, even if that means recommending less software or delaying marketing until your operations are ready.
2. **Complete Digital Solutions Under One Roof**: Software, websites, and marketing from one accountable team — no coordination gaps and no finger-pointing.
3. **Full Transparency**: Clear pricing, clear process, and clear ownership of outcomes.
4. **Built for Growth**: Every solution is designed to scale with your business, not box it into rigid templates.",
                'reading_time' => '4 min read',
                'cover_image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'Founding Team',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Software, Website, or Marketing First? How to Decide',
                'slug' => 'software-website-or-marketing-first',
                'category' => 'Strategy',
                'excerpt' => 'Should you build internal software, redesign your website, or run ads? Here is the exact framework we use to advise growing business owners.',
                'content' => "One of the most common dilemmas business owners bring to us is: *'Where do I put my capital first? Do I need a shiny new website, paid advertising, or internal management software?'*

The answer depends entirely on your primary operational bottleneck:

### 1. If Your Operations Are Chaotic: Choose BMS First
If you cannot handle more orders without making costly mistakes, running ads will only accelerate your problems. A Business Management System automates repetitive operations, organizes inventory, and frees up your mental bandwidth.

### 2. If Your Digital Presence Is Weak: Choose Website + SEO
If customers search for your company and find nothing, or if your current site looks dated and loads slowly on phones, you are leaking credibility. A clean, fast Laravel website gives your business an authoritative digital storefront.

### 3. If You Have Capacity and Need Customers: Choose Digital Marketing
When your operations are solid and your website is ready to convert, digital marketing provides the targeted fuel to drive consistent customer acquisition.",
                'reading_time' => '5 min read',
                'cover_image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'Sathi IT Strategy Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(6),
            ],
            [
                'title' => '5 Signs Your Business Has Outgrown Spreadsheets',
                'slug' => '5-signs-your-business-outgrown-spreadsheets',
                'category' => 'SME Growth',
                'excerpt' => 'Spreadsheets are great for getting started. But when they begin causing errors, stockouts, and owner burnout, it is time for custom BMS.',
                'content' => "Every successful business started with a spreadsheet. But Excel and Google Sheets were never designed to be multi-user enterprise databases.

### Watch Out For These 5 Red Flags:
1. **Multiple Versions of the 'Truth'**: 'Final_v2_updated.xlsx' vs 'Final_real_latest.xlsx' floating across staff WhatsApp groups.
2. **Accidental Formula Overwrites**: One deleted cell breaks row calculations, resulting in underpriced invoices or missed orders.
3. **No Role-Based Permissions**: Everyone with the sheet can see confidential profit margins or client lists.
4. **Owner Bottleneck**: You must personally verify calculations before anything gets dispatched.
5. **Zero Real-Time Mobile Visibility**: You cannot check accurate inventory while standing in front of a supplier or client.",
                'reading_time' => '6 min read',
                'cover_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80',
                'author_name' => 'Tech Lead, Sathi IT',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }

        // 7. Seed FAQs (directly from the official document)
        $faqs = [
            [
                'question' => 'What services does Sathi IT offer?',
                'answer' => 'We offer three core services: custom software (including Business Management Systems), website development, and digital marketing. We can deliver these individually or as a combined package.',
                'category' => 'Services',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'How much do your services cost?',
                'answer' => 'Digital marketing packages start from ৳20,000, website + SEO packages start from ৳20,000, and BMS software starts from ৳10,000. Custom or complex projects are quoted individually based on scope.',
                'category' => 'Pricing',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Do you only work with businesses in Bangladesh?',
                'answer' => "We're starting locally to build deep experience solving real business problems, with plans to expand and serve clients globally as we grow.",
                'category' => 'General',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'What if I’m not sure which service I need?',
                'answer' => "That's exactly what we're here for. We guide you first — if a service isn't the right fit for your business right now, we'll tell you honestly instead of selling it to you anyway.",
                'category' => 'General',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'What technology do you build websites with?',
                'answer' => 'Our websites are built on Laravel, giving you a fast, secure, and scalable foundation that can grow alongside your business.',
                'category' => 'Technology',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Do you provide support after the project is delivered?',
                'answer' => "Yes. We see ourselves as an ongoing partner, not a one-time vendor — we're available for support, maintenance, and future scaling needs after launch.",
                'category' => 'Support',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
