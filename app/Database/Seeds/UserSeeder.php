<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'Iban',
                'email'    => 'Iban@mail.com',
                'password' => '123',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'username' => 'Aku',
                'email'    => 'Aku@mail.com',
                'password' => '123',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'username' => 'Kamu',
                'email'    => 'kamu@mail.com',
                'password' => '123',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO user (username, email, password, created_at, updated_at) VALUES(:username:, :email:, :password:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('user')->insert($data);

        $this->db->table('user')->insertBatch($data);
    }
}