<?php

namespace App\Models;

use CodeIgniter\Model;

class PackagingTypeModel extends Model
{
    protected $table = 'packagingtype';
    protected $primaryKey = 'PackagingTypeID';
    protected $allowedFields = [
        'PackagingTypeName',
        'PackagingTypeDescription',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'CreatedAt';
    protected $updatedField = 'UpdatedAt';
}
