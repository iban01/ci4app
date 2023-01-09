<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistModel extends Model
{
    protected $table      = 'playlist';
    protected $primaryKey = 'ID';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $dateformat = 'datetime';
    protected $createdField = 'CREATED_AT';
    protected $updatedField = 'UPDATED_AT';
    protected $allowedFields = ['sampul', 'nama'];
}