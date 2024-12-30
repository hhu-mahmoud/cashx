<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Firstname'  => 'System',
                'Lastname'  => 'Admin',
                'Username'  => 'admin',
                'Email'     => 'admin@heyit.org',
                'Password_hash'  => password_hash('admin123', PASSWORD_DEFAULT),
                'Role'      => 'admin',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('Users')->insertBatch($data);
    }
}
