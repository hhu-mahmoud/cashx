<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStorageLocationTable extends Migration
{
    public function up()
    {
        // Define the fields for the StorageLocation table
        $this->forge->addField([
            'StorageLocationID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'LocationName' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
            ],
            'LocationDescription' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        // Add primary key
        $this->forge->addPrimaryKey('StorageLocationID');

        // Create the table
        $this->forge->createTable('StorageLocation');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('StorageLocation');
    }
}
