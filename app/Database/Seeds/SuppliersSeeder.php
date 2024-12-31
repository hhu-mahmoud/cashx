<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    public function run()
    {
        // Sample data for Suppliers table
        $data = [
            [
                'SupplierName'  => 'ABC Packaging Co.',
                'Description'  => 'Company for oil',
                'ContactInfo' => 'John Doe',
                'PhoneNumber'   => '123-456-7890',
                'Email'         => 'contact@abcpkg.com',
                'Address'       => '123 Packaging St., City, Country',
            ],
        ];

        // Insert data into the Suppliers table
        $this->db->table('Suppliers')->insertBatch($data);
    }
}
