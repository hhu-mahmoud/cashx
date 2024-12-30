<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        // Insert Euro, US Dollar, and Egyptian Pound into the currencies table
        $data = [
            [
                'CurrencyCode'    => 'USD',
                'CurrencyName'    => 'US Dollar',
                'CurrencySymbol'  => '$',
                'ExchangeRate'    => 1.0000,  // Base currency
                'Status'           => 'active',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'CurrencyCode'    => 'EUR',
                'CurrencyName'    => 'Euro',
                'CurrencySymbol'  => '€',
                'ExchangeRate'    => 1.2345,  // Example exchange rate
                'Status'           => 'active',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'CurrencyCode'    => 'EGP',
                'CurrencyName'    => 'Egyptian Pound',
                'CurrencySymbol'  => '£',
                'ExchangeRate'    => 0.032,   // Example exchange rate
                'Status'           => 'active',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the 'currencies' table
        $this->db->table('currencies')->insertBatch($data);
    }
}
