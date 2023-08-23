<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Product 1',
                'price' => 19.99,
            ],
            [
                'name' => 'Product 2',
                'price' => 29.99,
            ],
            // Add more data as needed
        ];

        // Using the DB query builder to insert data
        $this->db->table('product')->insertBatch($data);
    }
}
