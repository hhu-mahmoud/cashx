<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePackagingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PackagingID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'PackagingTypeID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'PackagingCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'PackagingMaterial' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('PackagingID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('PackagingTypeID', 'PackagingType', 'PackagingTypeID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Packaging');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Packaging');
    }
}
