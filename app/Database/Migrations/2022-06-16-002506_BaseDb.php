<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BaseDb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'students_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'students_nis' => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'null' => false,
            ],
            'students_email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'students_password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'students_verified' => [
                'type' => 'boolean',
                'null' => false,
            ],
            'students_nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'students_no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'students_main_mac_device' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'students_secondary_mac_device' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'students_foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('students_id', true);
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}
