<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateApiKeysTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'api_key' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'status'      => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default'    => 'active',
            ],
            'allowed_models' => [
                'type' => 'TEXT', // JSON array of allowed models
                'null' => true,
            ],
            'allowed_methods' => [
                'type' => 'TEXT', // JSON array of allowed methods
                'null' => true,
            ],
            'allowed_ips' => [
                'type' => 'TEXT', // JSON array of allowed IPs
                'null' => true,
            ],
            'expires_at' => [
                'type' => 'DATETIME',
                'null' => true, // Null means no expiration
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('api_keys',true);
    }

    public function down()
    {
        $this->forge->dropTable('api_keys',true,true);
    }
}
