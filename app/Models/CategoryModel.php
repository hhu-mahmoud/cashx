<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    protected $allowedFields = ['CategoryName', 'Description', 'CreatedAt', 'UpdatedAt'];
    protected $useTimestamps = true;
    protected $createdField = 'CreatedAt';
    protected $updatedField = 'UpdatedAt';
}
