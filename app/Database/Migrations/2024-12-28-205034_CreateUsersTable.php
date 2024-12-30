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
            'Id'       => ['type' => 'INT', 'auto_increment' => true],
            'Firstname'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'Lastname'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'Username'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'Email'    => ['type' => 'VARCHAR', 'constraint' => 255],
            'Password_hash' => ['type' => 'VARCHAR', 'constraint' => 255],
            'Password_reset_token' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'password_reset_expires' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'Role'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('Id', true);
        $this->forge->addKey('Username', false,true);
        $this->forge->addKey('Email', false,true);
        $this->forge->createTable('Users',true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $this->forge->dropTable('users',true, true);
    }

}