<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiscountsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        // Sample data for Discount table
        $data = [
            [
                'ProductID'     => $products[0]->ProductID, // Assuming ProductID 1 exists in the Products table
                'DiscountType'  => 'Percentage',
                'DiscountValue' => 10.00, // 10% discount
            ],
            [
                'ProductID'     => $products[1]->ProductID, // Assuming ProductID 2 exists in the Products table
                'DiscountType'  => 'Fixed',
                'DiscountValue' => 50.00, // Fixed discount of 50 units
            ],
            [
                'ProductID'     => $products[2]->ProductID, // Assuming ProductID 3 exists in the Products table
                'DiscountType'  => 'Percentage',
                'DiscountValue' => 5.00, // 5% discount
            ],
        ];

        // Insert the data into the Discount table
        $this->db->table('Discounts')->insertBatch($data);
    }
}
