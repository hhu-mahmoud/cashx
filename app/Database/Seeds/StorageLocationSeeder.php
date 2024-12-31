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
            ],
            [
                'LocationName' => 'Warehouse B',
                'LocationDescription' => 'Secondary warehouse for finished products.',
            ],
            [
                'LocationName' => 'Office Storage',
                'LocationDescription' => 'Storage area for office supplies and equipment.',
            ],
        ];

        // Insert data into the StorageLocation table
        $this->db->table('StorageLocation')->insertBatch($data);
    }
}
