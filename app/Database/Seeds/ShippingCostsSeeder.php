<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ShippingCostsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $shippingMethods = $this->db->table('ShippingMethods')->get()->getResult();
        // Sample data for ShippingCosts table
        $data = [
            [
                'ProductID'       => $products[0]->ProductID,  // Assumes ProductID 1 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[0]->ShippingMethodID,
                'ShippingCost'    => 100.00,
                'ShippingDuration'=> '3-5 days',
                'CreatedAt'       => date('Y-m-d H:i:s'),
                'UpdatedAt'       => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'       => $products[1]->ProductID,  // Assumes ProductID 2 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[1]->ShippingMethodID,
                'ShippingCost'    => 200.00,
                'ShippingDuration'=> '7-10 days',
                'CreatedAt'       => date('Y-m-d H:i:s'),
                'UpdatedAt'       => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'       => $products[2]->ProductID,  // Assumes ProductID 3 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[2]->ShippingMethodID,
                'ShippingCost'    => 50.00,
                'ShippingDuration'=> '5-7 days',
                'CreatedAt'       => date('Y-m-d H:i:s'),
                'UpdatedAt'       => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the ShippingCosts table
        $this->db->table('ShippingCosts')->insertBatch($data);
    }
}
