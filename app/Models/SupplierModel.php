<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'SupplierID';
    protected $allowedFields = [
        'SupplierName',
        'Description',
        'Email',
        'PhoneNumber',
        'ContactInfo',
        'Address'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'CreatedAt';
    protected $updatedField = 'UpdatedAt';
}
