<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_project' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
                'nama_project' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'tgl_awal' => [
                'type' => 'DATE'
            ],
                'tgl_akhir' => [
                'type' => 'DATE'
            ],
                'tgl_awal' => [
                'type' => 'DATE'
           ],
                'tahun_project' => [
                'type' => 'INT',
                'constraint' => '11',
           ],
                'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
           ],
        ]);
        $this->forge->addKey('id_project', TRUE);
        $this->forge->createTable('project');
    }

    public function down()
    {
        //
    }
}
