<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'CategoryName' => 'Electronics',
                'Description'  => 'Electronic devices and gadgets',
            ],
            [
                'CategoryName' => 'Clothing',
                'Description'  => 'Men and women clothing',
            ],
            [
                'CategoryName' => 'Furniture',
                'Description'  => 'Furniture for home and office',
            ],
            [
                'CategoryName' => 'Books',
                'Description'  => 'Books for various genres',
            ],
            [
                'CategoryName' => 'Sports',
                'Description'  => 'Sports equipment and accessories',
            ],
        ];

        $this->db->table('Categories')->insertBatch($data);
    }
}
