<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Section extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'class_id'    => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'section_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sections');
    }

    public function down()
    {
        $this->forge->dropTable('sections');
    }
}
