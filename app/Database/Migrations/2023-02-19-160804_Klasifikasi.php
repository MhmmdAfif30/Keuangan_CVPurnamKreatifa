<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Klasifikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_klasifikasi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
                'id_sub_klasifikasi' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
                'nama_klasifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'kode_klasifikasi' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id_klasifikasi', TRUE);
        $this->forge->createTable('klasifikasi');
    }

    public function down()
    {
        //
    }
}
