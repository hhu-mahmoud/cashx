<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMaintenanceTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'MaintenanceID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'MachineName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'MaintenanceCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'MaintenanceDate' => [
                'type' => 'DATETIME',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('MaintenanceID', true);
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Maintenance');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Maintenance');
    }
}
