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
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        // Set the primary key for the Storage table
        $this->forge->addPrimaryKey('StorageID');
        // Add foreign key relationship with StorageType table
        $this->forge->addForeignKey('StorageTypeID', 'StorageType', 'StorageTypeID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('StorageLocationID', 'StorageLocation', 'StorageLocationID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        // Create the Storage table
        $this->forge->createTable('Storage');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // Drop the Storage table
        $this->forge->dropTable('Storage');
    }
}
