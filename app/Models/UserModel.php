<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'firstname',
		'lastname',
		'username',
		'email',
		'password_hash',
        'password_reset_token',
        'password_reset_expires'
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