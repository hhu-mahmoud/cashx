<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePackagingTypeTable extends Migration
{
    public function up()
    {
        // Define the fields for the PackagingType table
        $this->forge->addField([
            'PackagingTypeID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'PackagingTypeName' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
            ],
            'PackagingTypeDescription' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        // Add primary key
        $this->forge->addPrimaryKey('PackagingTypeID');

        // Create the table
        $this->forge->createTable('PackagingType');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('PackagingType');
    }
}
