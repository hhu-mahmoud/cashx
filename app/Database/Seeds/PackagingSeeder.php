<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PackagingSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $packagingType = $this->db->table('PackagingType')->get()->getResult();
        // Sample data for Packaging table
        $data = [
            [
                'ProductID'        => $products[0]->ProductID,  // Assumes ProductID 1 exists in the Products table
                'PackagingTypeID'  => $packagingType[0]->PackagingTypeID,  // Assumes PackagingTypeID 1 (Box) exists in PackagingType table
                'Quantity'         => 100,
                'PackagingCost'    => 50.00,  // Cost of packaging
                'CreatedAt'        => date('Y-m-d H:i:s'),
                'UpdatedAt'        => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'        => $products[1]->ProductID,  // Assumes ProductID 2 exists in the Products table
                'PackagingTypeID'  => $packagingType[1]->PackagingTypeID,  // Assumes PackagingTypeID 2 (Plastic Wrap) exists in PackagingType table
                'Quantity'         => 200,
                'PackagingCost'    => 30.00,
                'CreatedAt'        => date('Y-m-d H:i:s'),
                'UpdatedAt'        => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'        => $products[2]->ProductID,  // Assumes ProductID 3 exists in the Products table
                'PackagingTypeID'  => $packagingType[2]->PackagingTypeID,  // Assumes PackagingTypeID 3 (Bubble Wrap) exists in PackagingType table
                'Quantity'         => 50,
                'PackagingCost'    => 25.00,
                'CreatedAt'        => date('Y-m-d H:i:s'),
                'UpdatedAt'        => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'        => $products[3]->ProductID,  // Assumes ProductID 4 exists in the Products table
                'PackagingTypeID'  => $packagingType[3]->PackagingTypeID,  // Assumes PackagingTypeID 4 (Wooden Crate) exists in PackagingType table
                'Quantity'         => 10,
                'PackagingCost'    => 200.00,
                'CreatedAt'        => date('Y-m-d H:i:s'),
                'UpdatedAt'        => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'        => $products[4]->ProductID,  // Assumes ProductID 5 exists in the Products table
                'PackagingTypeID'  => $packagingType[4]->PackagingTypeID,  // Assumes PackagingTypeID 5 (Pallet) exists in PackagingType table
                'Quantity'         => 25,
                'PackagingCost'    => 150.00,
                'CreatedAt'        => date('Y-m-d H:i:s'),
                'UpdatedAt'        => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the Packaging table
        $this->db->table('Packaging')->insertBatch($data);
    }
}
