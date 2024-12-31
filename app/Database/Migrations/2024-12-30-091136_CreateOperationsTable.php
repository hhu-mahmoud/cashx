<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOperationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'OperationID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'OperationName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Description'   => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'OperationCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'TimePerUnit' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('OperationID', true);
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Operations');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Operations');
    }
}
