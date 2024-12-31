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
            ],
            [
                'CurrencyCode'    => 'EUR',
                'CurrencyName'    => 'Euro',
                'CurrencySymbol'  => '€',
                'ExchangeRate'    => 1.2345,  // Example exchange rate
                'Status'           => 'active',
            ],
            [
                'CurrencyCode'    => 'EGP',
                'CurrencyName'    => 'Egyptian Pound',
                'CurrencySymbol'  => '£',
                'ExchangeRate'    => 0.032,   // Example exchange rate
                'Status'           => 'active',
            ],
        ];

        // Insert data into the 'currencies' table
        $this->db->table('Currencies')->insertBatch($data);
    }
}
