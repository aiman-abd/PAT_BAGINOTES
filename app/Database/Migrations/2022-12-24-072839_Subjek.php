<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subjek extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'subjek_id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_subjek' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('subjek_id', true);
        $this->forge->createTable('subjek');
    }

    public function down()
    {
        $this->forge->dropTable('subjek');
    }
}
