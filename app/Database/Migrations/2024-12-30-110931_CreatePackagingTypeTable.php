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
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        // Add primary key
        $this->forge->addPrimaryKey('PackagingTypeID');

        // Create the table
        $this->forge->createTable('PackagingType');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('PackagingType');
    }
}
