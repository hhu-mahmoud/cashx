<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RawMaterialsSeeder extends Seeder
{
    public function run()
    {
        $currencies = $this->db->table('Currencies')->get()->getResult();
        $unitTypes = $this->db->table('UnitTypes')->get()->getResult();
        // Initialize data array
        $data = [
            [
                'MaterialName' => 'Steel',
                'UnitCost' => 150.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'UnitTypeID'    => $unitTypes[0]->UnitTypeID,
            ],
            [
                'MaterialName' => 'Copper',
                'UnitCost' => 200.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'UnitTypeID'    => $unitTypes[0]->UnitTypeID,
            ],
            [
                'MaterialName' => 'Aluminum',
                'UnitCost' => 120.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'UnitTypeID'    => $unitTypes[0]->UnitTypeID,
            ],
            [
                'MaterialName' => 'Plastic',
                'UnitCost' => 50.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'UnitTypeID'    => $unitTypes[0]->UnitTypeID,
            ]
        ];

        // Insert data into the 'raw_materials' table
        $this->db->table('RawMaterials')->insertBatch($data);
    }
}
