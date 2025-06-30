<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductResourceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_product_list_page_shows_products(): void
    {
        // // $response = $this->get('/');
        // parent::setUp();
        // $this->actingAs(User::factory()->create());
        // // $response->assertStatus(200);


        $admin = User::factory()->create();
        Product::factory()->count(3)->create();
        $this->actingAs($admin)
            ->get('/admin/products')
            ->assertSee(Product::first()->name);
    }

    /*
uses(RefreshDatabase::class);

it('can see product list in filament admin', function () {
    $admin = User::factory()->create([
        'email' => 'admin@example.com',
        'is_admin' => true, // Ensure this user can access Filament
    ]);

    Product::factory()->count(5)->create();

    actingAs($admin);

    $response = $this->get('/admin/products');

    $response->assertSuccessful();
    $response->assertSee(Product::first()->name);
});*/
}
