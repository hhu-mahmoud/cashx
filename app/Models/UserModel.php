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

    // Validation rules for the model
    protected $validationRules = [
        'Firstname'      => 'required|min_length[3]|max_length[255]',
        'Lastname'       => 'required|min_length[3]|max_length[255]',
        'Username'       => 'required|min_length[3]|max_length[255]|is_unique[users.Username]',
        'Email'          => 'required|valid_email|is_unique[users.Email]',
        'Password_hash'  => 'required|min_length[6]',
        'UserRoleTypeID' => 'required|integer',
    ];

    protected $validationMessages = [
        'Firstname'      => [
            'required'   => 'Firstname is required.',
            'min_length' => 'Firstname must be at least 3 characters.',
            'max_length' => 'Firstname must not exceed 255 characters.',
        ],
        'Lastname'       => [
            'required'   => 'Lastname is required.',
            'min_length' => 'Lastname must be at least 3 characters.',
            'max_length' => 'Lastname must not exceed 255 characters.',
        ],
        'Username'       => [
            'required'   => 'Username is required.',
            'is_unique'  => 'This username is already taken.',
            'min_length' => 'Username must be at least 3 characters.',
            'max_length' => 'Username must not exceed 255 characters.',
        ],
        'Email'          => [
            'required'    => 'Email is required.',
            'valid_email' => 'Please enter a valid email address.',
            'is_unique'   => 'This email is already registered.',
        ],
        'Password_hash'  => [
            'required'   => 'Password is required.',
            'min_length' => 'Password must be at least 6 characters.',
        ],
        'UserRoleTypeID' => [
            'required' => 'User Role is required.',
            'integer'  => 'User Role must be a valid integer.',
        ],
    ];

    protected $returnType = 'array';
    protected $useSoftDeletes = false; // Set to true if you're using soft deletes
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

    // Relations (foreign key relationships)
    public function getUserRoleType($userRoleTypeID)
    {
        return $this->db->table('UserRoleType')
            ->select('RoleName')
            ->where('UserRoleTypeID', $userRoleTypeID)
            ->get()
            ->getRowArray();
    }

}