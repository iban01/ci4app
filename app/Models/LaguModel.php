<?php

namespace App\Models;

use CodeIgniter\Model;

class LaguModel extends Model
{
    protected $table      = 'lagu';
    protected $primaryKey = 'ID';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $dateformat = 'datetime';
    protected $createdField = 'CREATED_AT';
    protected $updatedField = 'UPDATED_AT';
}