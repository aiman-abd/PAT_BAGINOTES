<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CatatanSaya extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
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
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'waktu_unggah' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('catatan_saya');
    }

    public function down()
    {
        $this->forge->dropTable('catatan_saya');
    }
}
