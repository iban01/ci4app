<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'ID';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $dateformat = 'datetime';
    protected $createdField = 'CREATED_AT';
    protected $updatedField = 'UPDATED_AT';
    // protected $allowedFields = ['sampul', 'nama'];
    public function search($keyword) {
        // $builder = $this->table('user');
        // $builder->like('username', $keyword);
        // return $builder;

        return $this->table('user')->like('username', $keyword);
    }
}