<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateShippingMethodsTable extends Migration
{
    public function up()
    {
        // Create ShippingMethods table
        $this->forge->addField([
            'ShippingMethodID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'MethodName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('ShippingMethodID');
        $this->forge->createTable('ShippingMethods');
    }

    public function down()
    {
        // Drop the ShippingMethods table
        $this->forge->dropTable('ShippingMethods');
    }
}
