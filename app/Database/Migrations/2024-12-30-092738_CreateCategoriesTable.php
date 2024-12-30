<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'CategoryID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'CategoryName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('CategoryID', true);
        $this->forge->createTable('Categories');
    }

    public function down()
    {
        $this->forge->dropTable('Categories');
    }
}
