<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentAdmissionModel extends Model
{
    protected $table            = 'bluck_student_info'; // Table Name
    protected $primaryKey       = 'student_info_sets_at_iddddds'; // Primary Key
    protected $allowedFields    = ['student_info_sets_at_iddddds','student_info_bn_names', 'student_info_names_en', 'birth_date_dob', 'birth_registration_nos', 'student_info_addresss', 'student_info_father_name_en', 'student_info_bn_father_name','student_info_mother_en','student_info_bn_mother', 'student_info_gradian_phone1', 'student_info_gradian_phone2nd', 'gardian_name','gardian_relationss','class_iddddd','online_admission_auto_idddiiid']; // Allowed Fields



 



}
