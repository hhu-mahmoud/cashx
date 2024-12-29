<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiKeyModel extends Model
{
    protected $table = 'api_keys'; // Table name
    protected $primaryKey = 'id'; // Primary key

    // Define the fields that can be inserted or updated
    protected $allowedFields = [
        'api_key',
        'status',
        'allowed_models',
        'allowed_methods',
        'allowed_ips',
        'expires_at',
        'created_at',
        'updated_at'
    ];

    // Automatically handle timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Retrieve an API key by its value
    public function getKey($key)
    {
        return $this->where('api_key', $key)->first();
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
            $apiKey['status'] == 0 ||
            (!empty($apiKey['expires_at']) && strtotime($apiKey['expires_at']) < time())
        ) {
            return false;
        }

        return $apiKey;
    }

    // Generate a new API key
    public function generateKey($data)
    {
        $data['api_key'] = bin2hex(random_bytes(16)); // Generate a random API key
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        return $this->insert($data);
    }
}
