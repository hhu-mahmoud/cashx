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
            ],
            [
                'MethodName'  => 'Sea',
                'Description' => 'Affordable shipping via sea transport.',
            ],
            [
                'MethodName'  => 'Land',
                'Description' => 'Shipping via land transportation.',
            ],
            [
                'MethodName'  => 'Express',
                'Description' => 'Priority fast shipping service.',
            ],
            [
                'MethodName'  => 'Courier',
                'Description' => 'Standard courier delivery.',
            ],
        ];

        // Insert data into the ShippingMethods table
        $this->db->table('ShippingMethods')->insertBatch($data);
    }
}
