<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRawMaterialsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'MaterialID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'MaterialName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'UnitCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'UnitTypeID' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('MaterialID', true);
        $this->forge->addForeignKey('UnitTypeID', 'UnitTypes', 'UnitTypeID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('RawMaterials');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('RawMaterials');
    }
}
