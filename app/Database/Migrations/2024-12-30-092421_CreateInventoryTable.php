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
                'name' => 'StorageID',
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => false,
            ],
            'Quantity' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'LastUpdated datetime default current_timestamp',
        ]);

        $this->forge->addKey('InventoryID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('MaterialID', 'RawMaterials', 'MaterialID', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('StorageID', 'Storage', 'StorageID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Inventory');
    }

    public function down()
    {
        $this->forge->dropTable('Inventory');
    }
}
