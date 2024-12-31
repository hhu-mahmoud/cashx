<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRoleTypeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'RoleName'  => 'System',
                'Description' => 'System Administrator with full access',
            ],
            [
                'RoleName'  => 'Admin',
                'Description' => 'Administrator with full access',
            ],
            [
                'RoleName'  => 'User',
                'Description' => 'Standard user with limited access',
            ],
            [
                'RoleName'  => 'Moderator',
                'Description' => 'Moderator with limited administrative rights',
            ],
        ];

        // Insert the data into the user_role_type table
        $this->db->table('UserRoleType')->insertBatch($data);
    }
}
