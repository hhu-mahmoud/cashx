<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupportSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $currencies = $this->db->table('Currencies')->get()->getResult();
        // Sample data for SupportTable
        $data = [
            [
                'ProductID'   => $products[0]->ProductID,  // ProductID (assumes ProductID 1 exists)
                'SupportType' => 'Technical Support',  // Support Type
                'SupportCost' => 100.00,  // Support Cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
            [
                'ProductID'   => $products[1]->ProductID,  // ProductID (assumes ProductID 2 exists)
                'SupportType' => 'Warranty Support',  // Support Type
                'SupportCost' => 50.00,  // Support Cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
            [
                'ProductID'   => $products[2]->ProductID,  // ProductID (assumes ProductID 3 exists)
                'SupportType' => 'Installation Support',  // Support Type
                'SupportCost' => 150.00,  // Support Cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
            [
                'ProductID'   => $products[3]->ProductID,  // ProductID (assumes ProductID 1 exists)
                'SupportType' => 'Customer Service',  // Support Type
                'SupportCost' => 80.00,  // Support Cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
        ];

        // Insert data into the Support table
        $this->db->table('Support')->insertBatch($data);
    }
}
