<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
class CreateUsersTable extends Migration
{

    /**
     * @inheritDoc
     */
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'auto_increment' => true],
            'firstname'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'lastname'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'username'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'    => ['type' => 'VARCHAR', 'constraint' => 255],
            'password_hash' => ['type' => 'VARCHAR', 'constraint' => 255],
            'password_reset_token' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'password_reset_expires' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('username', false,true);
        $this->forge->addKey('email', false,true);
        $this->forge->createTable('users',true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $this->forge->dropTable('users',true, true);
    }

}