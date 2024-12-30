<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NoteID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'RelatedTo' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'NoteContent' => [
                'type'       => 'TEXT',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('NoteID', true);
        $this->forge->createTable('Notes');
    }

    public function down()
    {
        $this->forge->dropTable('Notes');
    }
}
