<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bank extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_bank' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
                'nama_bank' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'pemilik_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'nomor_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'kode_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_bank', TRUE);
        $this->forge->createTable('bank');
    }

    public function down()
    {
        //
    }
}
