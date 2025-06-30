<?php

namespace Tests\Feature;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BrandResourceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function authenticateAdmin()
    {
        $admin = User::factory()->create([
            'email' => 'admin@gmail.com',
        ]);
        $this->actingAs($admin);
        return $admin;
    }


    /** @test*/
    public function brand_index_page_is_accessible()
    {
        $this->authenticateAdmin();
        $response = $this->get('/admin/brands');
        $response->assertStatus(200);
    }


    public function brand_can_be_created()
    {
        $this->authenticateAdmin();
        Brand::create([
            'name' => 'Apple',
            'slug' => 'apple',
            'is_active' => true,
        ]);

        $this->assertDatabaseHas('brands', [
            'name' => 'Apple',
            'slug' => 'apple',
        ]);
    }
    /** @test */
    public function brand_can_be_edited()
    {
        $this->authenticateAdmin();
        $brand = Brand::factory()->create([
            'name' => 'Samsung',
            'slug' => 'samsung'
        ]);
        $response = $this->put('admin/brands/{$brand->id}', [
            'name' => 'Samsung Updated',
            'slug' => 'samsung-updated',
            'is_active' => true,
        ]);
        $this->assertDatabaseHas('brands', [
            'id' => $brand->id,
            'name' => 'Samsung Updated'
        ]);
    }
}
