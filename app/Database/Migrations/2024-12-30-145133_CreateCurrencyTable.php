<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCurrencyTable extends Migration
{
    public function up()
    {
        // Create Currency Table
        $this->forge->addField([
            'CurrencyID'            => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'CurrencyCode' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',  // e.g., USD, EUR, GBP
            ],
            'CurrencyName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'CurrencySymbol' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'ExchangeRate' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,4', // e.g., 1.2345
                'default'    => 1.0000,  // Default to 1.0000 for base currency
            ],
            'Status' => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default'    => 'active',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        // Primary key
        $this->forge->addPrimaryKey('CurrencyID');

        // Create the table
        $this->forge->createTable('Currencies');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // Drop the table if rolling back
        $this->forge->dropTable('Currencies');
    }
}
