<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OperationsSeeder extends Seeder
{
    public function run()
    {
        $currencies = $this->db->table('Currencies')->get()->getResult();
        // Data for operations with operation cost and time per unit
        $data = [
            [
                'OperationName' => 'Cutting',
                'Description'   => 'Cutting raw materials into specified shapes and sizes.',
                'OperationCost' => 15.00,  // Operation cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'TimePerUnit'   => 0.5,    // Time per unit (in minutes)
            ],
            [
                'OperationName' => 'Welding',
                'Description'   => 'Joining metal parts together by applying heat and pressure.',
                'OperationCost' => 30.00,  // Operation cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'TimePerUnit'   => 1.0,    // Time per unit (in minutes)
            ],
            [
                'OperationName' => 'Assembly',
                'Description'   => 'Assembling components into a final product.',
                'OperationCost' => 25.00,  // Operation cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'TimePerUnit'   => 0.8,    // Time per unit (in minutes)
            ],
            [
                'OperationName' => 'Painting',
                'Description'   => 'Applying paint to products to improve appearance and protect surfaces.',
                'OperationCost' => 20.00,  // Operation cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'TimePerUnit'   => 0.6,    // Time per unit (in minutes)
            ],
            [
                'OperationName' => 'Quality Control',
                'Description'   => 'Inspecting and testing products to ensure they meet quality standards.',
                'OperationCost' => 10.00,  // Operation cost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
                'TimePerUnit'   => 0.4,    // Time per unit (in minutes)
            ],
        ];

        // Insert the operation data into the Operations table
        $this->db->table('Operations')->insertBatch($data);
    }
}
