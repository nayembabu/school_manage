<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notice extends Migration
{
    public function up()
    {
     $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'featured_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => 5,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('notice');
    }

    public function down()
    {
        $this->forge->dropTable('notice');
    }
}
