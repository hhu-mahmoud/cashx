<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MarketingCostsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        // Sample data for MarketingCosts table
        $data = [
            [
                'CampaignName'  => 'Holiday Sale Campaign',
                'ProductID'     => $products[0]->ProductID, // Assuming ProductID 1 exists in the Products table
                'MarketingCost' => 5000.00,
                'StartDate'     => '2024-12-01',
                'EndDate'       => '2024-12-31',
            ],
            [
                'CampaignName'  => 'New Year Promo',
                'ProductID'     => $products[1]->ProductID, // Assuming ProductID 2 exists in the Products table
                'MarketingCost' => 7000.00,
                'StartDate'     => '2025-01-01',
                'EndDate'       => '2025-01-15',
            ],
            [
                'CampaignName'  => 'Summer Discount Drive',
                'ProductID'     => $products[2]->ProductID, // Assuming ProductID 3 exists in the Products table
                'MarketingCost' => 3000.00,
                'StartDate'     => '2025-06-01',
                'EndDate'       => '2025-06-30',
            ],
        ];

        // Insert the data into the MarketingCosts table
        $this->db->table('MarketingCosts')->insertBatch($data);
    }
}
