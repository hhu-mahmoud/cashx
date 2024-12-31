<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MaintenanceSeeder extends Seeder
{
    public function run()
    {
        $currencies = $this->db->table('Currencies')->get()->getResult();
        // Sample data for Maintenance table
        $data = [
            [
                'MachineName'     => 'CNC Lathe Machine',
                'MaintenanceCost' => 1500.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'MaintenanceDate' => '2024-01-10',
            ],
            [
                'MachineName'     => '3D Printer',
                'MaintenanceCost' => 800.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'MaintenanceDate' => '2024-01-15',
            ],
            [
                'MachineName'     => 'Laser Cutter',
                'MaintenanceCost' => 1200.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'MaintenanceDate' => '2024-01-20',
            ],
        ];

        // Insert the data into the Maintenance table
        $this->db->table('Maintenance')->insertBatch($data);
    }
}
