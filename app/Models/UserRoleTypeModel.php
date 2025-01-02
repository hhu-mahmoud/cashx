<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleTypeModel extends Model
{
    protected $table      = 'UserRoleType';
    protected $primaryKey = 'UserRoleTypeID';

    protected $returnType     = 'array'; // You can change this to 'object' if needed
    protected $useSoftDeletes = false; // Set to true if you're using soft deletes

    // The fields that can be inserted or updated
    protected $allowedFields = ['RoleName', 'Description'];

    // Validation rules for the model
    protected $validationRules    = [
        'RoleName' => 'required|min_length[3]|max_length[255]',
        'Description' => 'required|min_length[3]|max_length[255]',
    ];

    protected $validationMessages = [
        'RoleName' => [
            'required' => 'Role Name is required.',
            'min_length' => 'Role Name must be at least 3 characters.',
            'max_length' => 'Role Name must not exceed 255 characters.',
        ],
        'Description' => [
            'required' => 'Description is required.',
            'min_length' => 'Description must be at least 3 characters.',
            'max_length' => 'Description must not exceed 255 characters.',
        ],
    ];

    // No need for `created_at` or `updated_at` columns unless you're using timestamps
    protected $useTimestamps = false;
}
