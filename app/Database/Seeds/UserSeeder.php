<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'username' => 'student1',
            'email' => 'student1@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role' => 'student',
        ],
        [
            'username' => 'instructor1',
            'email' => 'instructor1@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role' => 'instructor',
        ],
        [
            'username' => 'admin1',
            'email' => 'admin1@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role' => 'admin',
        ],
    ];
    $this->db->table('users')->insertBatch($data);
    }
}
 