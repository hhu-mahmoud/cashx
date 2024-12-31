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
            'UserID'                     => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'Firstname'              => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'Lastname'               => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'Username'               => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'Email'                  => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'Password_hash'          => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'Password_reset_token'   => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ],
            'password_reset_expires' => ['type'       => 'VARCHAR',
                                         'constraint' => 255,
                                         'null'       => true
            ],
            'UserRoleTypeID'         => [
                'type'       => 'INT',
                'constraint' => 3,
                'unsigned'   => true,
                'null'       => false,
                'default'    => 1
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('UserID', true);
        $this->forge->addKey('Username', false, true);
        $this->forge->addKey('Email', false, true);
        $this->forge->addForeignKey('UserRoleTypeID', 'UserRoleType', 'UserRoleTypeID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Users', true);
        $this->db->enableForeignKeyChecks();
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $this->forge->dropTable('Users', true, true);
    }

}