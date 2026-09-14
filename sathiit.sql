-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 11, 2026 at 11:24 AM
-- Server version: 8.4.10
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sathiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'General',
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `category`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'What services does Sathi IT offer?', 'We offer three core services: custom software (including Business Management Systems), website development, and digital marketing. We can deliver these individually or as a combined package.', 'Services', 1, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'How much do your services cost?', 'Digital marketing packages start from ৳20,000, website + SEO packages start from ৳20,000, and BMS software starts from ৳10,000. Custom or complex projects are quoted individually based on scope.', 'Pricing', 2, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, 'Do you only work with businesses in Bangladesh?', 'We\'re starting locally to build deep experience solving real business problems, with plans to expand and serve clients globally as we grow.', 'General', 3, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(4, 'What if I’m not sure which service I need?', 'That\'s exactly what we\'re here for. We guide you first — if a service isn\'t the right fit for your business right now, we\'ll tell you honestly instead of selling it to you anyway.', 'General', 4, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(5, 'What technology do you build websites with?', 'Our websites are built on Laravel, giving you a fast, secure, and scalable foundation that can grow alongside your business.', 'Technology', 5, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(6, 'Do you provide support after the project is delivered?', 'Yes. We see ourselves as an ongoing partner, not a one-time vendor — we\'re available for support, maintenance, and future scaling needs after launch.', 'Support', 6, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_interested` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `admin_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `phone`, `service_interested`, `budget`, `message`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES
(1, 'Kazi Farhan', 'farhan@greenagro.com.bd', '+880 1819-998877', 'Custom Software (BMS)', '৳50,000 - ৳1,00,000+', 'We have 3 warehouses and our inventory tracking in Excel is breaking every day. Need automated order and stock management.', 'new', NULL, '2026-09-11 05:37:11', '2026-09-11 05:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_11_120000_create_sathi_it_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Software',
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `challenge` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metrics` json DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `live_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `slug`, `category`, `client_name`, `challenge`, `solution`, `result`, `metrics`, `cover_image`, `is_featured`, `live_url`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Prime Logistics BMS & Fleet Manager', 'prime-logistics-bms', 'Software', 'Prime Express Logistics', 'The client was buried under paper receipts, lost fuel logs, and delayed billing. Over 40 hours per week were wasted reconciling driver dispatches across 4 branch depots.', 'Sathi IT built a centralized Laravel Business Management System (BMS) with automated trip dispatch, driver digital expense logging, and instant automated customer billing.', 'Eliminated 65% of manual administrative hours, reduced billing errors to under 0.2%, and cut invoice settlement cycle from 14 days to 48 hours.', '[{\"label\": \"Admin Hours Saved\", \"value\": \"65%\"}, {\"label\": \"Invoice Turnaround\", \"value\": \"2 Days\"}, {\"label\": \"Billing Accuracy\", \"value\": \"99.8%\"}]', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80', 1, 'https://example.com/prime-logistics', 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'Nordic Heritage Brand & E-Commerce Web Platform', 'nordic-heritage-web', 'Website', 'Nordic Heritage Lifestyle', 'Existing legacy website suffered from a 72% bounce rate, 5-second mobile load times, and poor search ranking for key retail merchandise categories.', 'Engineered a modern, lightning-fast Laravel web application with pristine minimal aesthetics, sub-second page loads, and structured on-page schema SEO.', 'Mobile bounce rate dropped to 28%, organic search traffic surged +180% within 90 days, and online purchase conversion doubled from 1.4% to 3.2%.', '[{\"label\": \"Organic Search Traffic\", \"value\": \"+180%\"}, {\"label\": \"Page Load Speed\", \"value\": \"0.8s\"}, {\"label\": \"Conversion Rate\", \"value\": \"3.2%\"}]', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80', 1, 'https://example.com/nordic-heritage', 2, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, 'Dhaka AgroTech Growth & B2B Lead Funnel', 'dhaka-agrotech-growth', 'Marketing', 'Dhaka AgroTech Supplies', 'The owner had previously spent money on unguided social boosts with freelancers who vanished without delivering traceable sales leads or clear reports.', 'Constructed high-converting B2B landing pages backed by tightly targeted Google Search campaigns and Facebook retargeting for commercial farm owners.', 'Generated 140+ qualified wholesale purchasing inquiries per month at 42% lower cost per lead, yielding a verified 4.8x Return on Ad Spend (ROAS).', '[{\"label\": \"ROAS Achieved\", \"value\": \"4.8x\"}, {\"label\": \"Cost Per Lead\", \"value\": \"-42%\"}, {\"label\": \"Monthly B2B Leads\", \"value\": \"140+\"}]', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80', 1, 'https://example.com/agrotech', 3, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(4, 'Medikart Retail Inventory & Point of Sale', 'medikart-retail-pos', 'Software', 'Medikart Pharmacy Chain', 'Frequent stockouts, untracked batch expirations, and stock discrepancy across three branch outlets due to disjointed Excel sheets.', 'Deployed an interconnected custom BMS inventory system with batch expiry alerts, barcode scanner integration, and automated reorder points.', 'Reduced expired stock losses by 85% and cut branch inventory audit time from 3 full days to 45 minutes.', '[{\"label\": \"Expiry Waste Cut\", \"value\": \"85%\"}, {\"label\": \"Audit Speed\", \"value\": \"45 Min\"}]', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=80', 0, NULL, 4, '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'General',
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '4 min read',
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sathi IT Team',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category`, `excerpt`, `content`, `reading_time`, `cover_image`, `author_name`, `is_featured`, `is_published`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Why We Started Sathi IT — And Who It’s Really For', 'why-we-started-sathi-it', 'Brand Story', 'Too many business owners get burned by agencies who overpromise and vanish. Here is why we built Sathi IT as a transparent partner first.', 'Many small and medium-sized businesses reach a certain level and get stuck there. The owner is buried in day-to-day operations, lacks the technical knowledge to make informed decisions, and often ends up misled — or even scammed — by agencies and freelancers who don\'t deliver what was promised.\n\nSathi IT was built to be different — a partner that guides before it builds, stays transparent throughout, and takes real responsibility for outcomes, not just deliverables. We\'re starting locally, working closely with businesses we understand, and using that real-world experience to grow into a team that can serve businesses globally.\n\n### The 4 Pillars That Guide Every Engagement:\n1. **Guidance Before Selling**: We advise honestly, even if that means recommending less software or delaying marketing until your operations are ready.\n2. **Complete Digital Solutions Under One Roof**: Software, websites, and marketing from one accountable team — no coordination gaps and no finger-pointing.\n3. **Full Transparency**: Clear pricing, clear process, and clear ownership of outcomes.\n4. **Built for Growth**: Every solution is designed to scale with your business, not box it into rigid templates.', '4 min read', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80', 'Founding Team', 1, 1, '2026-09-01 05:27:05', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'Software, Website, or Marketing First? How to Decide', 'software-website-or-marketing-first', 'Strategy', 'Should you build internal software, redesign your website, or run ads? Here is the exact framework we use to advise growing business owners.', 'One of the most common dilemmas business owners bring to us is: *\'Where do I put my capital first? Do I need a shiny new website, paid advertising, or internal management software?\'*\n\nThe answer depends entirely on your primary operational bottleneck:\n\n### 1. If Your Operations Are Chaotic: Choose BMS First\nIf you cannot handle more orders without making costly mistakes, running ads will only accelerate your problems. A Business Management System automates repetitive operations, organizes inventory, and frees up your mental bandwidth.\n\n### 2. If Your Digital Presence Is Weak: Choose Website + SEO\nIf customers search for your company and find nothing, or if your current site looks dated and loads slowly on phones, you are leaking credibility. A clean, fast Laravel website gives your business an authoritative digital storefront.\n\n### 3. If You Have Capacity and Need Customers: Choose Digital Marketing\nWhen your operations are solid and your website is ready to convert, digital marketing provides the targeted fuel to drive consistent customer acquisition.', '5 min read', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80', 'Sathi IT Strategy Team', 0, 1, '2026-09-05 05:27:05', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, '5 Signs Your Business Has Outgrown Spreadsheets', '5-signs-your-business-outgrown-spreadsheets', 'SME Growth', 'Spreadsheets are great for getting started. But when they begin causing errors, stockouts, and owner burnout, it is time for custom BMS.', 'Every successful business started with a spreadsheet. But Excel and Google Sheets were never designed to be multi-user enterprise databases.\n\n### Watch Out For These 5 Red Flags:\n1. **Multiple Versions of the \'Truth\'**: \'Final_v2_updated.xlsx\' vs \'Final_real_latest.xlsx\' floating across staff WhatsApp groups.\n2. **Accidental Formula Overwrites**: One deleted cell breaks row calculations, resulting in underpriced invoices or missed orders.\n3. **No Role-Based Permissions**: Everyone with the sheet can see confidential profit margins or client lists.\n4. **Owner Bottleneck**: You must personally verify calculations before anything gets dispatched.\n5. **Zero Real-Time Mobile Visibility**: You cannot check accurate inventory while standing in front of a supplier or client.', '6 min read', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80', 'Tech Lead, Sathi IT', 0, 1, '2026-09-08 05:27:05', '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plans`
--

CREATE TABLE `pricing_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Software',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_numeric` int DEFAULT NULL,
  `billing_cycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `features` json NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `cta_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Get Consultation',
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_plans`
--

INSERT INTO `pricing_plans` (`id`, `name`, `slug`, `category`, `price`, `price_numeric`, `billing_cycle`, `description`, `features`, `is_popular`, `cta_text`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'BMS Software (Starter)', 'bms-software-starter', 'Software', '৳10,000', 10000, 'Starting price', 'Starting price for a basic business management module tailored to your primary operational bottleneck.', '[\"Core single-module system (Inventory or Sales or Invoicing)\", \"Up to 3 user roles & staff accounts\", \"Real-time transaction & summary dashboard\", \"Data export to Excel & PDF invoice generation\", \"Database setup & deployment guidance\", \"30 days post-launch warranty & bug fixes\"]', 0, 'Get BMS Starter', 1, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'Website + SEO Package', 'website-seo-package', 'Website', '৳20,000', 20000, 'One-time investment', 'Complete high-performance Laravel website with bespoke UI, content integration, and on-page SEO.', '[\"Bespoke modern UI/UX design (No cookie-cutter templates)\", \"Up to 6 fully customized pages + CMS Admin Panel\", \"Complete On-page SEO setup (Meta, schema, sitemap)\", \"Mobile-first responsive engineering & smooth animations\", \"Interactive contact lead forms & WhatsApp integration\", \"Fast hosting configuration & SSL installation\", \"Admin training & 60 days dedicated support\"]', 1, 'Launch Your Website', 2, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, 'Digital Marketing Package', 'digital-marketing-package', 'Marketing', '৳20,000', 20000, 'Monthly retainer', 'Dedicated monthly acquisition engine covering social content, paid ad campaigns, and SEO growth.', '[\"Monthly Facebook & Google Ad campaign setup & management\", \"12-16 custom branded social creatives & copywriting\", \"Continuous local SEO keyword monitoring & optimization\", \"Audience targeting, A/B testing & retargeting pixels\", \"Transparent monthly KPI report (Ad spend, leads, CAC)\", \"Bi-weekly strategy call with dedicated growth manager\"]', 0, 'Scale Marketing', 3, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(4, 'Custom Full Software / Complex Ecosystem', 'custom-software-ecosystem', 'Custom', 'Custom Quote', NULL, 'Milestone based', 'Priced individually based on scope, multi-branch architecture, custom API integrations, and timeline.', '[\"End-to-end multi-branch ERP/BMS architecture\", \"Custom API integrations (Payment gateways, SMS, Courier)\", \"Advanced role permissions & departmental audits\", \"Dedicated project manager & weekly staging sprints\", \"Automated backup clusters & high-concurrency database\", \"SLA-backed priority support & long-term maintenance\"]', 0, 'Request Custom Scope', 4, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'code',
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_desc` longtext COLLATE utf8mb4_unicode_ci,
  `features` json DEFAULT NULL,
  `starting_price` int NOT NULL DEFAULT '0',
  `price_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BDT',
  `badge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `tagline`, `icon`, `short_desc`, `full_desc`, `features`, `starting_price`, `price_unit`, `badge`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Custom Software (BMS)', 'custom-software-bms', 'Business management systems built around how you actually work.', 'bms', 'Business management systems built around how you actually work. Automate manual tasks, track orders, and get real-time operational clarity.', 'A business management system built around how your business actually operates — not a rigid template you have to adapt to. We automate the repetitive, manual work that keeps owners stuck managing instead of growing.\n\nWhether you need multi-branch inventory tracking, sales automation, driver/fleet oversight, or unified billing, we architect software that fits your real processes like a glove.', '[\"Inventory, sales, and order management\", \"Staff and task management tools\", \"Reporting dashboards for real-time visibility\", \"Custom modules built around your specific workflow\", \"Role-based staff permissions & audit trails\", \"Cloud backup and data redundancy\"]', 10000, 'BDT (Starter Module)', 'Operational Freedom', 1, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'Website Development', 'website-development', 'Fast, clean, SEO-ready websites that turn visitors into customers.', 'web', 'Fast, clean, SEO-ready websites built on Laravel that turn visitors into customers with high-converting layouts and lightning-fast speed.', 'A clean, fast, mobile-friendly website built on Laravel — designed with a crisp, accessible aesthetic, clear content, and clear calls to action, so visitors know exactly what to do next. Every website includes on-page SEO so you\'re discoverable from day one.\n\nWe avoid bloated builders and heavy templates, ensuring 95+ Google PageSpeed scores, military-grade security, and an intuitive back-office CMS.', '[\"Custom design — no generic templates\", \"Mobile-responsive, fast-loading pages (<1.2s)\", \"On-page SEO setup included from day one\", \"Built on Laravel for long-term stability and scalability\", \"Custom CMS admin panel tailored for your staff\", \"Secure HTTPS & spam-protected contact funnels\"]', 20000, 'BDT (One-time)', 'High Conversion', 2, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, 'Digital Marketing', 'digital-marketing', 'Social media, SEO, and ad campaigns that bring the right people to your business.', 'marketing', 'Social media, SEO, and targeted ad campaigns that bring high-intent buyers to your business instead of vanity metrics.', 'Getting found matters as much as looking good. Our digital marketing service covers the channels that actually bring customers to small and medium businesses.\n\nWe combine organic search optimization (SEO), performance Facebook & Google advertising, and strategic content planning into a cohesive growth engine with transparent monthly reporting.', '[\"Social media marketing and strategic content\", \"Search engine optimization (SEO) for high-intent keywords\", \"Paid ad campaigns (Facebook & Google Ads)\", \"Monthly transparent performance and ROI reporting\", \"Conversion rate optimization (CRO) on landing pages\", \"Competitor & target customer research\"]', 20000, 'BDT / month', 'Measurable ROI', 3, 1, '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3S5cvwnFHLj5uKG8vwlxY1JXsx5NEJFUaC8Q5ZxP', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJSWno3OFkwQTlBTXZnemdEeGRzbkpKZ01jbjJpWUJsU2F4eGFySHRGIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9ibG9nXC93aHktd2Utc3RhcnRlZC1zYXRoaS1pdCIsInJvdXRlIjoiYmxvZy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105012),
('A2HPLJrquk2tPNXj8pqo5rA9nWqZjSPrSpf1UUfE', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJnREg3WEdlNnVlQ2V5dUlkUkhMM2t1Q1dHdUhkRjRtNDE5UmVrSExJIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9zZXJ2aWNlcyIsInJvdXRlIjoic2VydmljZXMifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1789105011),
('ArgmhqkpfH2sbePz347lctcPGkSgTPL1mGyFMqsj', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJ3cldxRUs3R29CazNTblNQeWdRUkZrQlZVZ0Rqd0s4T2E0V3V0Sk5IIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hZG1pblwvbG9naW4iLCJyb3V0ZSI6ImFkbWluLmxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105012),
('aRzFhFlFHPDSDD6mL31Au494qi9hQDTyR2rtvdp6', 1, '172.23.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJRNXo4TDBwRWdDdUJBd05lSUIyWUJaWTd6ZEMzQm5nb2JLRjdYWm8zIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9', 1789106177),
('BcN9gOWCJL0oDYCy2SJRwmxA4HXXMvWsYTZFJj3X', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJ2RHRrVmNoY3BzVFF6bzVST3c4SEVMMFdkeWRLblQxb0V4UmU1M2NTIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105012),
('EQLXXInaPeica7pBx8cQ5fz1l6tbDK85BpnXoIA2', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiI3SEwxMGtwa0hJSHk2Q3BDOHNvakpnY3I2WTZPUjB2QWhCb0hCVWNJIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9zZXJ2aWNlc1wvY3VzdG9tLXNvZnR3YXJlLWJtcyIsInJvdXRlIjoic2VydmljZXMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1789105012),
('EusRJqaa694mQvc26MulkYmQU6wagimkbVBhHHbP', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJlQkY2YW9jSTkyMmp0WVlPd1ZqSVpBYWRicFN0aDQ5WlRRWXNYYmt0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1789105012),
('hgwW2aZnsycSYMg33jHvTkzJgRySQe72gz9P2K0C', NULL, '172.23.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI5bXhMUllTSmdla3B4Yk9kcGc1TGRqcmR4VHhoVjA4WXZoa2RvTzdlIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789125871),
('i0DeNnpKCh1NKpVdyKy3OeilN719F3hhiHtXLBqh', NULL, '172.23.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI2ak01NnVDV25UQTdDVXZyeU9ZZDlCMmlKN1FMbjdSU0dHc3Q4aUUyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9zZXJ2aWNlcyIsInJvdXRlIjoic2VydmljZXMifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1789105398),
('Kx4QYOYiYjpR56OmWX8iyetpcqolKYEWOkvHBeNk', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJmdUJPczg5aEVDbVo0b0lqY3RBSHZEcXJETU9taDA2OVBaOEZrRWNrIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9wb3J0Zm9saW8iLCJyb3V0ZSI6InBvcnRmb2xpbyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1789105012),
('ROeScSpcmkhOcZ26hhm8gsEgHyqlxQbJonquq51Y', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJtcWpJeXAzWllmSHRCWkNvZmNMRlVabmhDZVI2a0JxeHdzYXJCWm9vIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1789105011),
('vTLxfflksBCCtW1O0RIOTro3xve1qoQiEXm8gRrW', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiI2WFdPZkM0cnpjbmxMR1lQVTJoS1Vzb0FuNm0wWERTOHh5bVNDZWR6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105011),
('XBsmTg7ySm4OT2IMSCxs1cu7qgLhvD6hhgJYFq3Z', 1, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJqVzE4OXJyR3lsTGVzTnRqU3JRRkJOOFd3akhPV1pjNk9wWVZOV2tWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hZG1pblwvZGFzaGJvYXJkIiwicm91dGUiOiJhZG1pbi4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1789105073),
('XI982aG4J9uMVqmFJr75NaIzd5cQfNk6Xi7cmr9M', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJ6VHY1MXZ3eDdCOEV5UjJvOXRGc3FqR3hpMVZQb2U2YnZzc01jcTBKIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9wcmljaW5nIiwicm91dGUiOiJwcmljaW5nIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105012),
('YMTyZhc00OGbl3vDb8FXWQTQQNR0zrxpbmWFIjuN', NULL, '172.23.0.1', 'curl/8.5.0', 'eyJfdG9rZW4iOiJrNTZ1a0pZZjI4UkNtSmNSZVl6VzlUNkNPMWNFa2JRdmViNFN1OHZhIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9ibG9nIiwicm91dGUiOiJibG9nIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1789105012);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Sathi IT', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(2, 'site_tagline', 'Your Business IT and Growth Partner', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(3, 'site_email', 'contact@sathiit.com', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(4, 'site_phone', '+880 1700-000000', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(5, 'site_address', 'Dhaka, Bangladesh', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(6, 'hero_headline', 'Your Business, IT and Growth Partner', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(7, 'hero_subheadline', 'Sathi IT builds the software, websites, and marketing your business needs to grow — and stays with you as a partner, not just a vendor.', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(8, 'hero_body', 'Most businesses don\'t fail because the idea is wrong — they get stuck because they don\'t have the right technology, the right marketing, or someone honest to guide them. Sathi IT brings software development, website design, and digital marketing together under one roof, so you get a complete, transparent digital partner instead of juggling multiple vendors.', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(9, 'cta_band_title', 'Ready to stop getting stuck and start scaling?', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(10, 'cta_band_desc', 'Let\'s talk about where your business is — and where it can go.', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(11, 'facebook_url', 'https://facebook.com/sathiit', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(12, 'linkedin_url', 'https://linkedin.com/company/sathiit', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05'),
(13, 'whatsapp_number', '+8801700000000', 'general', '2026-09-11 05:27:05', '2026-09-11 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sathi IT Administrator', 'admin@sathiit.com', '2026-09-11 05:27:05', '$2y$12$GN2udjS8z8MnJSMSqtQxZ.KUjxo2CLK6vFs0CMkBTIMPSoz7ggVUu', 1, NULL, '2026-09-11 05:27:05', '2026-09-11 05:27:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_slug_unique` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pricing_plans_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
