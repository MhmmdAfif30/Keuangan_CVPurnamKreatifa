<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubKlasifikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_sub_klasifikasi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
                'nama_sub_klasifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'kode_sub_klasifikasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_sub_klasifikasi', TRUE);
        $this->forge->createTable('sub_klasifikasi');
    }

    public function down()
    {
        //
    }
}
