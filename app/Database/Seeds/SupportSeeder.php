<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupportSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        // Sample data for SupportTable
        $data = [
            [
                'ProductID'   => $products[0]->ProductID,  // ProductID (assumes ProductID 1 exists)
                'SupportType' => 'Technical Support',  // Support Type
                'SupportCost' => 100.00,  // Support Cost
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'   => $products[1]->ProductID,  // ProductID (assumes ProductID 2 exists)
                'SupportType' => 'Warranty Support',  // Support Type
                'SupportCost' => 50.00,  // Support Cost
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'   => $products[2]->ProductID,  // ProductID (assumes ProductID 3 exists)
                'SupportType' => 'Installation Support',  // Support Type
                'SupportCost' => 150.00,  // Support Cost
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'   => $products[3]->ProductID,  // ProductID (assumes ProductID 1 exists)
                'SupportType' => 'Customer Service',  // Support Type
                'SupportCost' => 80.00,  // Support Cost
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the Support table
        $this->db->table('Support')->insertBatch($data);
    }
}
