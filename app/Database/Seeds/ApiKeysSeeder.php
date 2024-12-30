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
                'api_key'         => '1234567890abcdef1234567890abcdef',
                'status'          => 'active',
                'allowed_models'  => 'User,Product',
                'allowed_methods' => 'GET,POST,PUT',
                'allowed_ips'     => '192.168.1.1,127.0.0.1',
                'expire_at'       => '2024-12-31 23:59:59',
            ],
            [
                'api_key'         => 'abcdef1234567890abcdef1234567890',
                'status'          => 'inactive',
                'allowed_models'  => 'User,Product',
                'allowed_methods' => 'GET,POST',
                'allowed_ips'     => '10.0.0.1',
                'expire_at'       => '2025-06-30 23:59:59',
            ],
            [
                'api_key'         => 'fedcba0987654321fedcba0987654321',
                'status'          => 'active',
                'allowed_methods' => 'GET',
                'expire_at'       => '2026-01-01 00:00:00',
            ],
        ];

        // Insert the data into the ApiKeys table
        $this->db->table('ApiKeys')->insertBatch($data);
    }
}
