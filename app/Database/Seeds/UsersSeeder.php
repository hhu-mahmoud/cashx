<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $userRoleType = $this->db->table('UserRoleType')->get()->getResult();
        $data = [
            [
                'Firstname'  => 'System',
                'Lastname'  => 'Admin',
                'Username'  => 'admin',
                'Email'     => 'm.fakhoury@gmx.de',
                'Password_hash'  => password_hash('uvg-ceg2fpg6hag_BTW', PASSWORD_DEFAULT),
                'UserRoleTypeID'      => $userRoleType[0]->UserRoleTypeID,
            ]
        ];

        $this->db->table('Users')->insertBatch($data);
    }
}
