<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table            = 'teacher_personal_info_main';
    protected $primaryKey       = 'teacher_personal_info_main_id';
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'full_name',
        'father_name',
        'mother_name',
        'gender',
        'date_of_birth',
        'blood_group',
        'email',
        'mobile_number',
        'national_id',
        'present_address',
        'permanent_address',
        'photo',
        'qualification',
        'subject_specialization',
        'experience',
        'emergency_contact',
        'marital_status',
        'bank_account_details',
        'reference_details',
        'religion',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}
