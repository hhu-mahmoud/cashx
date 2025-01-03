<?php

namespace App\Models;

use CodeIgniter\Model;

class CurrencyModel extends Model
{
    protected $table = 'currencies';
    protected $primaryKey = 'CurrencyID';
    protected $allowedFields = [
        'CurrencyCode',
        'CurrencyName',
        'CurrencySymbol',
        'ExchangeRate',
        'Status'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'CreatedAt';
    protected $updatedField = 'UpdatedAt';
}
