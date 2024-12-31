<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInventoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'InventoryID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'MaterialID' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'StorageID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => false,
            ],
            'Quantity' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('InventoryID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('MaterialID', 'RawMaterials', 'MaterialID', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('StorageID', 'Storage', 'StorageID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Inventory');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Inventory');
    }
}
