<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiKeyModel extends Model
{
    protected $table = 'ApiKeys'; // Table name
    protected $primaryKey = 'ApiKeyID'; // Primary key

    // Define the fields that can be inserted or updated
    protected $allowedFields = [
        'ApiKey',
        'Status',
        'AllowedModels',
        'AllowedMethods',
        'AllowedIPs',
        'ExpiresAt',
        'CreatedAt',
        'UpdatedAt'
    ];

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'CreatedAt';
    protected $updatedField  = 'UpdatedAt';

    // Retrieve an API key by its value
    public function getKey($key)
    {
        return $this->where('ApiKey', $key)->first();
    }

    // Check if a given API key is valid
    public function isValidKey($key)
    {
        $apiKey = $this->getKey($key);

        if (!$apiKey) {
            return false;
        }

        // Check status and expiration
        if (
            $apiKey['Status'] == 0 ||
            (!empty($apiKey['ExpiresAt']) && strtotime($apiKey['ExpiresAt']) < time())
        ) {
            return false;
        }

        return $apiKey;
    }

    // Generate a new API key
    public function generateKey($data)
    {
        $data['ApiKey'] = bin2hex(random_bytes(16)); // Generate a random API key
        $data['CreatedAt'] = date('Y-m-d H:i:s');
        $data['UpdatedAt'] = date('Y-m-d H:i:s');
        return $this->insert($data);
    }
}
