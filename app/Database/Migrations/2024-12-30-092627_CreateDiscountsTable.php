<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDiscountsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'DiscountID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ProductID' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'DiscountType' => [
                'type'       => 'ENUM',
                'constraint' => ['percentage', 'fixed'],
            ],
            'DiscountValue' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
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

        $this->forge->addKey('DiscountID', true);
        $this->forge->addForeignKey('ProductID', 'Products', 'ProductID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Discounts');
    }

    public function down()
    {
        $this->forge->dropTable('Discounts');
    }
}
