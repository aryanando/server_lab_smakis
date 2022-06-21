<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Student extends Seeder
{
    public function run()
    {
        $data = [
            'students_nis' => '1234/123',
            'students_email' => 'janedoe@ex.com',
            'students_password' => '12344321',
            'students_verified' => true,
            'students_nama' => 'Jane Doe',
            'students_no_telp' => '080123123123',
            'students_main_mac_device' => null,
            'students_secondary_mac_device' => null,
            'students_foto' => null,
        ];

        // Using Query Builder
        $this->db->table('students')->insert($data);
    }
}
