<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StorageTypeSeeder extends Seeder
{
    public function run()
    {
        // Data to insert into the StorageType table
        $data = [
            [
                'StorageTypeName' => 'Warehouse',
                'Description'     => 'A large space for storing bulk goods and products.',
            ],
            [
                'StorageTypeName' => 'Cold Storage',
                'Description'     => 'Temperature-controlled storage for perishable items like food and pharmaceuticals.',
            ],
            [
                'StorageTypeName' => 'Shelf',
                'Description'     => 'Storage using shelves for smaller items and products that need to be organized.',
            ],
            [
                'StorageTypeName' => 'Bulk Storage',
                'Description'     => 'Storage for raw materials or goods in large quantities, often uncontained.',
            ],
            [
                'StorageTypeName' => 'Secure Storage',
                'Description'     => 'Storage with enhanced security for valuable or sensitive items.',
            ],
        ];

        // Insert the data into the StorageType table
        $this->db->table('StorageType')->insertBatch($data);
    }
}
