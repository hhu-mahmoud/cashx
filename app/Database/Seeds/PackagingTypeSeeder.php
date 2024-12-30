<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PackagingTypeSeeder extends Seeder
{
    public function run()
    {
        // Sample data for PackagingType table
        $data = [
            [
                'PackagingTypeName' => 'Box',
                'PackagingTypeDescription' => 'Standard cardboard box for packaging products.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'PackagingTypeName' => 'Plastic Wrap',
                'PackagingTypeDescription' => 'Stretchable plastic film used to wrap products.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'PackagingTypeName' => 'Bubble Wrap',
                'PackagingTypeDescription' => 'Protective packaging material with air-filled bubbles.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'PackagingTypeName' => 'Wooden Crate',
                'PackagingTypeDescription' => 'Heavy-duty wooden crate for shipping large items.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
            [
                'PackagingTypeName' => 'Pallet',
                'PackagingTypeDescription' => 'Wooden or plastic platform for stacking and transporting goods.',
                'CreatedAt' => date('Y-m-d H:i:s'),
                'UpdatedAt' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the PackagingType table
        $this->db->table('PackagingType')->insertBatch($data);
    }
}
