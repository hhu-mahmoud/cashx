<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'SupplierID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'SupplierName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Description' => [
                'type'       => 'TEXT',
            ],
            'Email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'PhoneNumber' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'ContactInfo' => [
                'type'       => 'TEXT',
            ],
            'Address' => [
                'type'       => 'TEXT',
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('SupplierID', true);
        $this->forge->createTable('Suppliers');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('Suppliers');
    }
}
