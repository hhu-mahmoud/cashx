<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ShippingMethodsSeeder extends Seeder
{
    public function run()
    {
        // Sample data for ShippingMethods table
        $data = [
            [
                'MethodName'  => 'Air',
                'Description' => 'Fast shipping via air transport.',
                'CreatedAt'   => date('Y-m-d H:i:s'),
                'UpdatedAt'   => date('Y-m-d H:i:s'),
            ],
            [
                'MethodName'  => 'Sea',
                'Description' => 'Affordable shipping via sea transport.',
                'CreatedAt'   => date('Y-m-d H:i:s'),
                'UpdatedAt'   => date('Y-m-d H:i:s'),
            ],
            [
                'MethodName'  => 'Land',
                'Description' => 'Shipping via land transportation.',
                'CreatedAt'   => date('Y-m-d H:i:s'),
                'UpdatedAt'   => date('Y-m-d H:i:s'),
            ],
            [
                'MethodName'  => 'Express',
                'Description' => 'Priority fast shipping service.',
                'CreatedAt'   => date('Y-m-d H:i:s'),
                'UpdatedAt'   => date('Y-m-d H:i:s'),
            ],
            [
                'MethodName'  => 'Courier',
                'Description' => 'Standard courier delivery.',
                'CreatedAt'   => date('Y-m-d H:i:s'),
                'UpdatedAt'   => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the ShippingMethods table
        $this->db->table('ShippingMethods')->insertBatch($data);
    }
}
