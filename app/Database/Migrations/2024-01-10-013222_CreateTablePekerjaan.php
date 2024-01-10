<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePekerjaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type'                 => 'INT',
            'constraint'           => 5,
            'unsigned'             => true,
            'auto_increment'       => true,
        ],

        'pekerjaan' => [
            'type'              => 'VARCHAR',
            'constraint'        => '50',
        ],

        'created_at'    => [
            'type'      => 'DATETIME',
            'null'      => true,
        ],

        'updated_at'    => [
            'type'      => 'DATETIME',
            'null'      => true,
        ],
        
        'deleted_at'    => [
            'type'      => 'DATETIME',
            'null'      => true,
        ],
           
    ]);

    $this->forge->addKey('id', true, true);
    $this->forge->createTable('pekerjaan');
        
    }

    public function down()
    {
        $this->forge->dropTable('pekerjaan', true);
    }
}
