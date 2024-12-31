<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserRoleTypeTable extends Migration
{
    public function up()
    {
        // Create user_role_type table
        $this->forge->addField([
            'UserRoleTypeID' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'RoleName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'Description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->db->disableForeignKeyChecks();
        // Add primary key and other constraints
        $this->forge->addKey('UserRoleTypeID', true);
        // Create the table
        $this->forge->createTable('UserRoleType');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // Drop the user_role_type table if it exists
        $this->forge->dropTable('UserRoleType', true);
    }
}
