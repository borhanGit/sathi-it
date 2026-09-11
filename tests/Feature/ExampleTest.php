<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
    }

    /**
     * Test public pages respond with 200 OK.
     */
    public function test_public_pages_load_successfully(): void
    {
        $urls = ['/', '/about', '/services', '/portfolio', '/pricing', '/blog', '/faq', '/contact'];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
        }
    }

    /**
     * Test submitting a consultation lead form.
     */
    public function test_inquiry_submission_creates_record(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Mehedi Hasan',
            'email' => 'mehedi@example.com',
            'phone' => '+8801711223344',
            'service_interested' => 'Website Development',
            'budget' => '৳25,000 - ৳50,000',
            'message' => 'Looking for a new Laravel website with on-page SEO setup.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('inquiries', [
            'email' => 'mehedi@example.com',
            'service_interested' => 'Website Development',
        ]);
    }

    /**
     * Test unauthenticated access to admin dashboard redirects to admin login.
     */
    public function test_unauthenticated_admin_access_redirects(): void
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect(route('login'));
    }

    /**
     * Test admin login and dashboard access.
     */
    public function test_admin_can_login_and_access_dashboard(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@sathiit.com',
            'password' => 'admin12345',
        ]);

        $response->assertRedirect('/admin');
        $this->assertAuthenticated();

        $dashResponse = $this->actingAs(User::where('email', 'admin@sathiit.com')->first())
            ->get('/admin/dashboard');
        $dashResponse->assertStatus(200);
        $dashResponse->assertSee('Executive CMS Overview');
    }
}
