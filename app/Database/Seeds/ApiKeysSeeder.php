<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ApiKeysSeeder extends Seeder
{
    public function run()
    {
        // Sample data for ApiKeys table
        $data = [
            [
                'ApiKey'         => '1234567890abcdef1234567890abcdef',
                'Status'          => 'active',
                'AllowedModels'  => 'User,Product',
                'AllowedMethods' => 'GET,POST,PUT',
                'AllowedIPs'     => '192.168.1.1,127.0.0.1',
                'ExpiresAt'       => '2024-12-31 23:59:59',
            ],
            [
                'ApiKey'         => 'abcdef1234567890abcdef1234567890',
                'Status'          => 'inactive',
                'AllowedModels'  => 'User,Product',
                'AllowedMethods' => 'GET,POST',
                'AllowedIPs'     => null,
                'ExpiresAt'       => '2025-06-30 23:59:59',
            ],
            [
                'ApiKey'         => '*jUkhFa9jVho4r.x6s9edBDq!D2!7_PK2-!ZrpPJ7xUWvRQ-rLvqEnkmoZFj-.NNJk_@4UA2--AoWoX_h**-ueLrBmRD*cLqqTmT',
                'Status'          => 'active',
                'AllowedModels'  => null,
                'AllowedMethods' => null,
                'AllowedIPs'     => null,
                'ExpiresAt'       => '2026-01-01 00:00:00',
            ],
        ];

        // Insert the data into the ApiKeys table
        $this->db->table('ApiKeys')->insertBatch($data);
    }
}
