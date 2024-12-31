<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductComponentsSeeder extends Seeder
{
    public function run()
    {
        $products = $this->db->table('Products')->get()->getResult();
        $rawMaterials = $this->db->table('RawMaterials')->get()->getResult();
        $operations = $this->db->table('Operations')->get()->getResult();

        // Sample data for product components with OperationID and OperationTime
        $data = [
            [
                'ProductID'    => $products[0]->ProductID,  // Product ID (assumes ProductID 1 exists)
                'MaterialID'   => $rawMaterials[0]->MaterialID,  // Material ID (assumes MaterialID 1 exists)
                'OperationID'  => $operations[0]->OperationID,  // Operation ID (assumes OperationID 1 exists)
                'OperationTime'=> 1.5,  // Operation time (in minutes)
                'Quantity'     => 2.5,  // Quantity of the material for the product
            ],
            [
                'ProductID'    => $products[0]->ProductID,  // Product ID (assumes ProductID 1 exists)
                'MaterialID'   => $rawMaterials[1]->MaterialID,  // Material ID (assumes MaterialID 2 exists)
                'OperationID'  => $operations[1]->OperationID,  // Operation ID (assumes OperationID 2 exists)
                'OperationTime'=> 2.0,  // Operation time (in minutes)
                'Quantity'     => 3.0,  // Quantity of the material for the product
            ],
            [
                'ProductID'    => $products[1]->ProductID,  // Product ID (assumes ProductID 2 exists)
                'MaterialID'   => $rawMaterials[2]->MaterialID,  // Material ID (assumes MaterialID 3 exists)
                'OperationID'  => $operations[2]->OperationID,  // Operation ID (assumes OperationID 3 exists)
                'OperationTime'=> 0.8,  // Operation time (in minutes)
                'Quantity'     => 1.0,  // Quantity of the material for the product
            ],
            [
                'ProductID'    => $products[2]->ProductID,  // Product ID (assumes ProductID 3 exists)
                'MaterialID'   => $rawMaterials[0]->MaterialID,  // Material ID (assumes MaterialID 1 exists)
                'OperationID'  => $operations[3]->OperationID,  // Operation ID (assumes OperationID 4 exists)
                'OperationTime'=> 1.2,  // Operation time (in minutes)
                'Quantity'     => 4.0,  // Quantity of the material for the product
            ],
        ];

        // Insert data into the ProductComponents table
        $this->db->table('ProductComponents')->insertBatch($data);
    }
}
