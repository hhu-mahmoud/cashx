<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ShippingCostsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $shippingMethods = $this->db->table('ShippingMethods')->get()->getResult();
        $currencies = $this->db->table('Currencies')->get()->getResult();
        // Sample data for ShippingCosts table
        $data = [
            [
                'ProductID'       => $products[0]->ProductID,  // Assumes ProductID 1 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[0]->ShippingMethodID,
                'ShippingCost'    => 100.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'ShippingDuration'=> '3-5 days',
            ],
            [
                'ProductID'       => $products[1]->ProductID,  // Assumes ProductID 2 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[1]->ShippingMethodID,
                'ShippingCost'    => 200.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'ShippingDuration'=> '7-10 days',
            ],
            [
                'ProductID'       => $products[2]->ProductID,  // Assumes ProductID 3 exists in the Products table
                'ShippingMethodID'  => $shippingMethods[2]->ShippingMethodID,
                'ShippingCost'    => 50.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'ShippingDuration'=> '5-7 days',
            ],
        ];

        // Insert data into the ShippingCosts table
        $this->db->table('ShippingCosts')->insertBatch($data);
    }
}
