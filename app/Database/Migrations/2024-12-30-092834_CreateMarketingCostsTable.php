<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMarketingCostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'MarketingCostID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'CampaignName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'MarketingCost' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'CurrencyID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'StartDate' => [
                'type' => 'DATETIME',
            ],
            'EndDate' => [
                'type' => 'DATETIME',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('MarketingCostID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('CurrencyID', 'Currencies', 'CurrencyID', 'CASCADE', 'CASCADE');

        $this->forge->createTable('MarketingCosts');
    }

    public function down()
    {
        $this->forge->dropTable('MarketingCosts');
    }
}
