<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InventorySeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $storage = $this->db->table('Storage')->get()->getResult();
        $rawMaterials = $this->db->table('RawMaterials')->get()->getResult();
        // Sample inventory data
        $data = [
            [
                'ProductID'    => $products[0]->ProductID,  // Foreign key referencing Product
                'MaterialID'    => $rawMaterials[0]->MaterialID,  // Foreign key referencing RawMaterial
                'StorageID'    => $storage[0]->StorageID,  // Foreign key referencing StorageLocation
                'Quantity'     => 100,
                'CreatedAt'    => date('Y-m-d H:i:s'),
                'UpdatedAt'    => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'    => $products[1]->ProductID,
                'MaterialID'    => $rawMaterials[0]->MaterialID,  // Foreign key referencing RawMaterial
                'StorageID'    => $storage[0]->StorageID,
                'Quantity'     => 200,
                'CreatedAt'    => date('Y-m-d H:i:s'),
                'UpdatedAt'    => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'    => $products[2]->ProductID,
                'MaterialID'    => $rawMaterials[0]->MaterialID,  // Foreign key referencing RawMaterial
                'StorageID'    => $storage[0]->StorageID,
                'Quantity'     => 150,
                'CreatedAt'    => date('Y-m-d H:i:s'),
                'UpdatedAt'    => date('Y-m-d H:i:s'),
            ],
            [
                'ProductID'    => $products[3]->ProductID,
                'MaterialID'    => $rawMaterials[0]->MaterialID,  // Foreign key referencing RawMaterial
                'StorageID'    => $storage[0]->StorageID,
                'Quantity'     => 50,
                'CreatedAt'    => date('Y-m-d H:i:s'),
                'UpdatedAt'    => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into the Inventory table
        $this->db->table('Inventory')->insertBatch($data);
    }
}
