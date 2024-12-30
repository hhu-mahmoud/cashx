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
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'CategoryName' => 'Clothing',
                'Description'  => 'Men and women clothing',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'CategoryName' => 'Furniture',
                'Description'  => 'Furniture for home and office',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'CategoryName' => 'Books',
                'Description'  => 'Books for various genres',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'CategoryName' => 'Sports',
                'Description'  => 'Sports equipment and accessories',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('Categories')->insertBatch($data);
    }
}
