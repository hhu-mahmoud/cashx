<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUnitTypesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UnitTypeID'   => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'UnitTypeName' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => false,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addPrimaryKey('UnitTypeID');
        $this->forge->createTable('UnitTypes');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('UnitTypes');
    }
}
