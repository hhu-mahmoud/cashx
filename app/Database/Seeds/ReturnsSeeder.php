<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReturnsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        // Sample data for Returns table
        $data = [
            [
                'ProductID'    => $products[0]->ProductID, // Assuming ProductID 1 exists in the Products table
                'ReturnReason' => 'Defective item',
                'ReturnCost'   => 50.00,
                'ReturnDate'   => '2024-01-10',
            ],
            [
                'ProductID'    => $products[1]->ProductID, // Assuming ProductID 2 exists in the Products table
                'ReturnReason' => 'Wrong item delivered',
                'ReturnCost'   => 30.00,
                'ReturnDate'   => '2024-01-15',
            ],
            [
                'ProductID'    => $products[2]->ProductID, // Assuming ProductID 3 exists in the Products table
                'ReturnReason' => 'Customer dissatisfaction',
                'ReturnCost'   => 40.00,
                'ReturnDate'   => '2024-01-20',
            ],
        ];

        // Insert the data into the Returns table
        $this->db->table('Returns')->insertBatch($data);
    }
}
