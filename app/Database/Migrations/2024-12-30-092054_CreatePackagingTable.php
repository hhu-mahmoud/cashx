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
                'name' => 'PackagingTypeID',
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => false,
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
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('PackagingID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('PackagingTypeID', 'PackagingType', 'PackagingTypeID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');

        $this->forge->createTable('Packaging');
    }

    public function down()
    {
        $this->forge->dropTable('Packaging');
    }
}
