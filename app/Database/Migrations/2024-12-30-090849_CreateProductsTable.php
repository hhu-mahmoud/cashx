<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ProductID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Description' => [
                'type'       => 'TEXT',
            ],
            'BasePrice' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'SellingPrice' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'CategoryID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('ProductID', true);
        $this->forge->addForeignKey('CategoryID', 'Categories', 'CategoryID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Products');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Products');
    }
}
