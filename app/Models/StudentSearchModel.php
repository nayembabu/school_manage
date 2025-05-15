<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentSearchModel extends Model
{
    protected $table            = 'student_info';
    protected $primaryKey       = 'student_info_sets_at_iddddds';
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'student_info_bn_names',
        'student_info_bn_names',
        'birth_date_dob',
        'birth_registration_nos',
        'student_info_addresss',
        'student_info_father_name_en',
        'student_info_bn_father_name',
        'student_info_mother_en',
        'student_info_bn_mother',
    ];


}
