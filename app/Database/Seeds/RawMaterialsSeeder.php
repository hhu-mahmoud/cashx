<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RawMaterialsSeeder extends Seeder
{
    public function run()
    {
        $unitTypes = $this->db->table('UnitTypes')->get()->getResult();

        $data = [
            [
                'MaterialName'  => 'Aluminum Sheet',
                'UnitPrice'     => 20.00,
                'StockQuantity' => 10000,
                'UnitTypeID'    => $unitTypes[0]->UnitTypeID,  // Gram
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'MaterialName'  => 'Steel Rod',
                'UnitPrice'     => 50.00,
                'StockQuantity' => 500,
                'UnitTypeID'    => $unitTypes[6]->UnitTypeID,  // Meter
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'MaterialName'  => 'Copper Wire',
                'UnitPrice'     => 30.00,
                'StockQuantity' => 800,
                'UnitTypeID'    => $unitTypes[1]->UnitTypeID,  // Kilogram
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'MaterialName'  => 'Plastic Granules',
                'UnitPrice'     => 10.00,
                'StockQuantity' => 1500,
                'UnitTypeID'    => $unitTypes[1]->UnitTypeID,  // Kilogram
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'MaterialName'  => 'Glass Sheet',
                'UnitPrice'     => 40.00,
                'StockQuantity' => 300,
                'UnitTypeID'    => $unitTypes[]->UnitTypeID,  // Square Meter
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('RawMaterials')->insertBatch($data);
    }
}
