<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UnitTypesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'UnitTypeName' => 'Gram',
            ],
            [
                'UnitTypeName' => 'Kilogram',
            ],
            [
                'UnitTypeName' => 'Ton',
            ],
            [
                'UnitTypeName' => 'Liter',
            ],
            [
                'UnitTypeName' => 'Millimeter',
            ],
            [
                'UnitTypeName' => 'Centimeter',
            ],
            [
                'UnitTypeName' => 'Meter',
            ],
            [
                'UnitTypeName' => 'Kilometer',
            ],
            [
                'UnitTypeName' => 'Square Meter',
            ],
            [
                'UnitTypeName' => 'Piece',
            ],
        ];

        $this->db->table('UnitTypes')->insertBatch($data);
    }
}
