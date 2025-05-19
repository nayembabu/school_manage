<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;


class AddNewTeacherTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'teacher_personal_info_main_id' => [
                'type'       => 'INT',
                'constraint' => 11 ,
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'father_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mother_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'gender' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_of_birth' => [
                'type'       => 'DATE',
            ],
            'blood_group' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mobile_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'national_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'present_address' => [
                'type'       => 'TEXT',
            ],
            'permanent_address' => [
                'type'       => 'TEXT',
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'qualification' => [
                'type'       => 'TEXT',
            ],
            'subject_specialization' => [
                'type'       => 'TEXT',
            ],
            'experience' => [
                'type'       => 'TEXT',
            ],
            'emergency_contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'marital_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'bank_account_details' => [
                'type'       => 'TEXT',
            ],
            'reference_details' => [
                'type'       => 'TEXT',
            ],
            'religion' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'updated_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],


        ]);
        
        $this->forge->addKey('teacher_personal_info_main_id', true); // Primary Key
        $this->forge->createTable('teacher_personal_info_main');
    }

    public function down()
    {
          $this->forge->dropTable('teacher_personal_info_main');
        

    }
}
