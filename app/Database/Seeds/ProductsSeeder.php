<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $categories = $this->db->table('Categories')->get()->getResult();
        $currencies = $this->db->table('Currencies')->get()->getResult();
        $productData = [
            [
                'ProductName' => 'Smartphone A',
                'Description' => 'Latest smartphone with great features',
                'BasePrice'    => 300.00,
                'SellingPrice'=> 500.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'CategoryID'  => $categories[0]->CategoryID,
            ],
            [
                'ProductName' => 'T-Shirt B',
                'Description' => 'Comfortable cotton T-shirt',
                'BasePrice'    => 15.00,
                'SellingPrice'=> 25.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'CategoryID'  => $categories[1]->CategoryID,
            ],
            [
                'ProductName' => 'Office Chair C',
                'Description' => 'Ergonomic office chair for comfort',
                'BasePrice'    => 100.00,
                'SellingPrice'=> 150.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'CategoryID'  => $categories[2]->CategoryID,
            ],
            [
                'ProductName' => 'Fiction Book D',
                'Description' => 'Interesting fiction book for readers',
                'BasePrice'    => 10.00,
                'SellingPrice'=> 20.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'CategoryID'  => $categories[3]->CategoryID,
            ],
            [
                'ProductName' => 'Football E',
                'Description' => 'Professional football for sports enthusiasts',
                'BasePrice'    => 25.00,
                'SellingPrice'=> 40.00,
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'CategoryID'  => $categories[4]->CategoryID,
            ],
        ];

        $this->db->table('Products')->insertBatch($productData);
    }
}
