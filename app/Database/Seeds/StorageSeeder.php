<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StorageSeeder extends Seeder
{
    public function run()
    {
        $storageType = $this->db->table('StorageType')->get()->getResult();
        $storageLocation = $this->db->table('StorageLocation')->get()->getResult();
        $currencies = $this->db->table('Currencies')->get()->getResult();
        // Sample data for Storage table
        $data = [
            [
                'StorageName'      => 'Main Warehouse',
                'StorageTypeID'    => $storageType[0]->StorageTypeID,  // Assuming 1 corresponds to a 'Warehouse' type
                'StorageLocationID' => $storageLocation[0]->StorageLocationID, // Assuming 1 corresponds to a location in StorageLocation table
                'Capacity'         => 1000,
                'OccupiedSpace'    => 400,
                'StorageCost'      => 500.00,  // Added StorageCost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
            [
                'StorageName'      => 'Cold Storage Area',
                'StorageTypeID'    => $storageType[0]->StorageTypeID,  // Assuming 2 corresponds to a 'Cold Storage' type
                'StorageLocationID' => $storageLocation[1]->StorageLocationID, // Assuming 2 corresponds to a location in StorageLocation table
                'Capacity'         => 500,
                'OccupiedSpace'    => 200,
                'StorageCost'      => 300.00,  // Added StorageCost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
            [
                'StorageName'      => 'Shelf 1',
                'StorageTypeID'    => $storageType[0]->StorageTypeID,  // Assuming 3 corresponds to a 'Shelf' type
                'StorageLocationID' => $storageLocation[0]->StorageLocationID, // Assuming 3 corresponds to a location in StorageLocation table
                'Capacity'         => 200,
                'OccupiedSpace'    => 50,
                'StorageCost'      => 150.00,  // Added StorageCost
                'CurrencyID' => $currencies[2]->CurrencyID,  // Currency
            ],
        ];

        // Insert the data into the Storage table
        $this->db->table('Storage')->insertBatch($data);
    }
}
