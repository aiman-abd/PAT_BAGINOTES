<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Catatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'notes_id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'subjek' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'berkas' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('notes_id', true);
        $this->forge->createTable('catatan');
    }

    public function down()
    {
        $this->forge->dropTable('catatan');
    }
}
