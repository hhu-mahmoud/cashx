<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateApiKeysTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'ApiKeyID' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ApiKey' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'Status'      => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default'    => 'active',
            ],
            'AllowedModels' => [
                'type' => 'TEXT', // JSON array of allowed models
                'null' => true,
            ],
            'AllowedMethods' => [
                'type' => 'TEXT', // JSON array of allowed methods
                'null' => true,
            ],
            'AllowedIPs' => [
                'type' => 'TEXT', // JSON array of allowed IPs
                'null' => true,
            ],
            'ExpiresAt' => [
                'type' => 'DATETIME',
                'null' => true, // Null means no expiration
            ],
            'CreatedAt datetime default current_timestamp',
            'UpdatedAt datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('ApiKeyID', true);
        $this->forge->createTable('ApiKeys',true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('ApiKeys',true,true);
    }
}
