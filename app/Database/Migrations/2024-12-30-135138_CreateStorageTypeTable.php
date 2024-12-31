<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStorageTypeTable extends Migration
{
    public function up()
    {
        // Create the StorageType table
        $this->forge->addField([
            'StorageTypeID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'StorageTypeName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'Description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addPrimaryKey('StorageTypeID');
        $this->forge->createTable('StorageType');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // Drop the StorageType table
        $this->forge->dropTable('StorageType');
    }
}
