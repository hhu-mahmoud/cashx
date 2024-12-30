<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StorageLocationSeeder extends Seeder
{
    public function run()
    {
        // Sample data for StorageLocation table
        $data = [
            [
                'LocationName' => 'Warehouse A',
                'LocationDescription' => 'Main storage warehouse for raw materials.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'LocationName' => 'Warehouse B',
                'LocationDescription' => 'Secondary warehouse for finished products.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'LocationName' => 'Office Storage',
                'LocationDescription' => 'Storage area for office supplies and equipment.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the StorageLocation table
        $this->db->table('StorageLocation')->insertBatch($data);
    }
}
