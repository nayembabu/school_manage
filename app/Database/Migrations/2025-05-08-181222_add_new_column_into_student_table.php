<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;


class AddNewColumnToStudentTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('student_info', [
            'section_uniq_iddsss' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'student_picture_pathssss' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',

            ],
            'create_timess' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'update_timess' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'create_datesss' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'create_user_idsss' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
              
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('student_info', 'section_uniq_iddsss');
        $this->forge->dropColumn('student_info', 'student_picture_pathssss');
        $this->forge->dropColumn('student_info', 'create_timess');
        $this->forge->dropColumn('student_info', 'update_timess');
        $this->forge->dropColumn('student_info', 'create_datesss');
        $this->forge->dropColumn('student_info', 'create_user_idsss');

    }
}
