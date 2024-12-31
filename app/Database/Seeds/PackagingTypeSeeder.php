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
            ],
            [
                'PackagingTypeName' => 'Plastic Wrap',
                'PackagingTypeDescription' => 'Stretchable plastic film used to wrap products.',
            ],
            [
                'PackagingTypeName' => 'Bubble Wrap',
                'PackagingTypeDescription' => 'Protective packaging material with air-filled bubbles.',
            ],
            [
                'PackagingTypeName' => 'Wooden Crate',
                'PackagingTypeDescription' => 'Heavy-duty wooden crate for shipping large items.',
            ],
            [
                'PackagingTypeName' => 'Pallet',
                'PackagingTypeDescription' => 'Wooden or plastic platform for stacking and transporting goods.',
            ],
        ];

        // Insert data into the PackagingType table
        $this->db->table('PackagingType')->insertBatch($data);
    }
}
