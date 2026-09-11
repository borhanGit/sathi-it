<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add is_admin to users if not present
        if (Schema::hasTable('users') && !Schema::hasColumn('users', 'is_admin')) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('is_admin')->default(false)->after('password');
            });
        }

        // Services Table
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->string('icon')->default('code');
            $table->text('short_desc');
            $table->longText('full_desc')->nullable();
            $table->json('features')->nullable();
            $table->integer('starting_price')->default(0);
            $table->string('price_unit')->default('BDT');
            $table->string('badge')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Portfolios / Case Studies Table
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('Software'); // Software, Website, Marketing
            $table->string('client_name');
            $table->text('challenge');
            $table->text('solution');
            $table->text('result');
            $table->json('metrics')->nullable();
            $table->string('cover_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('live_url')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        // Pricing Plans Table
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->default('Software');
            $table->string('price');
            $table->integer('price_numeric')->nullable();
            $table->string('billing_cycle');
            $table->text('description')->nullable();
            $table->json('features');
            $table->boolean('is_popular')->default(false);
            $table->string('cta_text')->default('Get Consultation');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Posts / Blog Articles Table
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('General');
            $table->text('excerpt');
            $table->longText('content');
            $table->string('reading_time')->default('4 min read');
            $table->string('cover_image')->nullable();
            $table->string('author_name')->default('Sathi IT Team');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // FAQs Table
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->string('category')->default('General');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Inquiries / Leads Table
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('service_interested');
            $table->string('budget')->nullable();
            $table->text('message');
            $table->string('status')->default('new'); // new, contacted, closed
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });

        // Site Settings Table
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('pricing_plans');
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('services');

        if (Schema::hasTable('users') && Schema::hasColumn('users', 'is_admin')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('is_admin');
            });
        }
    }
};
