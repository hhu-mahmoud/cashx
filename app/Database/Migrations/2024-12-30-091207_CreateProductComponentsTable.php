<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductComponentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ComponentID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'MaterialID' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'Quantity' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'OperationID' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'OperationTime' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('ComponentID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('MaterialID', 'RawMaterials', 'MaterialID', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('OperationID', 'Operations', 'OperationID', 'SET NULL', 'CASCADE');
        $this->forge->createTable('ProductComponents');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('ProductComponents');
    }
}
