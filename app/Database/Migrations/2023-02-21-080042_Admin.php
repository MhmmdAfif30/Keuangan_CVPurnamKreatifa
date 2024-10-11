<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_admin' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
                'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
                'status' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id_admin', TRUE);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        //
    }
}
