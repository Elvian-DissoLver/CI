<?php

use App\Models\Product;
use CodeIgniter\Test\CIUnitTestCase;
/**
 * @internal
 */
final class ProductApiTest extends CIUnitTestCase
{
    public function test_index() {
        $response = $this->get('/api/product');

        $response->assertStatus(200)
            ->assertJsonCount(Product::count());
    }
}
