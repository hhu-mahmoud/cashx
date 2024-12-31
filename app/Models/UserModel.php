<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'Users';
	protected $primaryKey = 'UserID';
	protected $allowedFields = [
		'Firstname',
		'Lastname',
		'Username',
		'Email',
		'Password_hash',
        'Password_reset_token',
        'Password_reset_expires',
        'UserRoleTypeID',
	];
	protected $returnType = 'array';
	protected $useTimestamps = true;

    /**
     * Update user details
     *
     * @param int $userId The ID of the user to update
     * @param array $data The data to update (e.g., ['firstname' => 'John', 'lastname' => 'Doe'])
     * @return bool True on success, false on failure
     */
    public function updateUser(int $userId, array $data): bool
    {
        try {
            return $this->update($userId, $data);
        } catch (\Exception $e) {
            log_message('error', 'Error updating user: ' . $e->getMessage());
            return false;
        }
    }
}