<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $categories = $this->db->table('Categories')->get()->getResult();

        $productData = [
            [
                'ProductName' => 'Smartphone A',
                'Description' => 'Latest smartphone with great features',
                'BaseCost'    => 300.00,
                'SellingPrice'=> 500.00,
                'CategoryID'  => $categories[0]->CategoryID,  // Electronics
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductName' => 'T-Shirt B',
                'Description' => 'Comfortable cotton T-shirt',
                'BaseCost'    => 15.00,
                'SellingPrice'=> 25.00,
                'CategoryID'  => $categories[1]->CategoryID,  // Clothing
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductName' => 'Office Chair C',
                'Description' => 'Ergonomic office chair for comfort',
                'BaseCost'    => 100.00,
                'SellingPrice'=> 150.00,
                'CategoryID'  => $categories[2]->CategoryID,  // Furniture
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductName' => 'Fiction Book D',
                'Description' => 'Interesting fiction book for readers',
                'BaseCost'    => 10.00,
                'SellingPrice'=> 20.00,
                'CategoryID'  => $categories[3]->CategoryID,  // Books
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'ProductName' => 'Football E',
                'Description' => 'Professional football for sports enthusiasts',
                'BaseCost'    => 25.00,
                'SellingPrice'=> 40.00,
                'CategoryID'  => $categories[4]->CategoryID,  // Sports
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('Products')->insertBatch($productData);
    }
}
