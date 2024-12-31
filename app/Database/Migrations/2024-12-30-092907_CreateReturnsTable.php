<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReturnsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ReturnID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'ReturnReason' => [
                'type'       => 'TEXT',
            ],
            'ReturnCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'ReturnDate' => [
                'type' => 'DATETIME',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('ReturnID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Returns');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Returns');
    }
}
