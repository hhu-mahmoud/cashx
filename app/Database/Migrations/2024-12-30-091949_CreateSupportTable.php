<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSupportTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'SupportID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'SupportType' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'SupportCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('SupportID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Support');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Support');
    }
}
