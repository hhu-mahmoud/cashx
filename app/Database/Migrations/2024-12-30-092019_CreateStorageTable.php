<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStorageTable extends Migration
{
    public function up()
    {
        // Create the Storage table
        $this->forge->addField([
            'StorageID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'StorageName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'StorageTypeID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false,
            ],
            'StorageLocationID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false,
                'after'          => 'StorageTypeID',
            ],
            'Capacity' => [
                'type'       => 'INT',
                'constraint' => '11',
                'null'       => false,
            ],
            'OccupiedSpace' => [
                'type'       => 'INT',
                'constraint' => '11',
                'null'       => false,
            ],
            'StorageCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2', // 10 digits total, 2 decimal places
                'null'       => true,    // Allow null values
                'after'      => 'OccupiedSpace',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'CreatedAt' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'UpdatedAt' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        // Set the primary key for the Storage table
        $this->forge->addPrimaryKey('StorageID');

        // Add foreign key relationship with StorageType table
        $this->forge->addForeignKey('StorageTypeID', 'StorageType', 'StorageTypeID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('StorageLocationID', 'StorageLocation', 'StorageLocationID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');

        // Create the Storage table
        $this->forge->createTable('Storage');
    }

    public function down()
    {
        // Drop the Storage table
        $this->forge->dropTable('Storage');
    }
}
