<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateShippingCostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ShippingCostID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'ShippingMethodID' => [
                'name' => 'ShippingMethodID',
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => false,
            ],
            'ShippingCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'ShippingDuration' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('ShippingCostID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('ShippingMethodID', 'ShippingMethods', 'ShippingMethodID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');

        $this->forge->createTable('ShippingCosts');
    }

    public function down()
    {
        $this->forge->dropTable('ShippingCosts');
    }
}
