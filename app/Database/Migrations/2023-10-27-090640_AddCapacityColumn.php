<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCapacityColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('kelas', [
            'kapasitas' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ]
        ]);    }

    public function down()
    {
        $this->forge->dropColumn('kelas', 'kapasitas');
    }
}
