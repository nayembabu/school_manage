<?php

namespace App\Controllers;

use App\Models\StudentAddFromAdminPanelModel;
use App\Models\StudentAdmissionModel;
use App\Models\ClassModel;
use App\Controllers\BaseController;
use App\Libraries\Template;



class StudentAddFromAdminPanelController extends BaseController
{
    protected $StudentAddFromAdminPanelModel;
    protected $StudentAdmissionModel;
    protected $classModel;

    public function __construct()
    {
        parent::__construct();

        $this->StudentAddFromAdminPanelModel = new StudentAddFromAdminPanelModel();
        $this->StudentAdmissionModel = new StudentAdmissionModel();
        $this->classModel = new ClassModel();
    }

    public function student_add_from_admin_panel()
    {
        $data['classess'] = $this->classModel->findAll();
        $this->template->admin_panel('student_add_from_admin_panel', $data);
    }

    public function student_add_from_admin_panel_form()
    {
        
        $file = $this->request->getFile('student_picture_pathssss');

        // নতুন ফাইল নাম তৈরি (optional)
        $ext = $file->getExtension(); // ফাইলের এক্সটেনশন (jpg, png etc)
        $newName = time() . '.' . $ext;

        // ফাইল আপলোড (public/uploads/ ফোল্ডারে)
        $uploadPath = 'include/img/all_students';
        // ফাইল আপলোড

            // ফাইল আপলোড
        if ($file->move($uploadPath, $newName)) {                     
                    
            $dataa = [
                'student_info_bn_names'         => $this->request->getPost('student_info_bn_names'),
                'student_info_names_en'         => $this->request->getPost('student_info_names_en'),
                'birth_date_dob'                => $this->request->getPost('birth_date_dob'),
                'birth_registration_nos'        => $this->request->getPost('birth_registration_nos'),
                'student_info_addresss'         => $this->request->getPost('student_info_addresss'),
                'student_info_father_name_en'   => $this->request->getPost('student_info_father_name_en'),
                'student_info_bn_father_name'   => $this->request->getPost('student_info_bn_father_name'),
                'student_info_mother_en'        => $this->request->getPost('student_info_mother_en'),
                'student_info_bn_mother'        => $this->request->getPost('student_info_bn_mother'),
                'student_info_gradian_phone1'   => $this->request->getPost('student_info_gradian_phone1'),
                'student_info_gradian_phone2nd' => $this->request->getPost('student_info_gradian_phone2nd'),
                'gardian_name'                  => $this->request->getPost('gardian_name'),
                'gardian_relationss'            => $this->request->getPost('gardian_relationss'),
                'class_iddddd'                  => $this->request->getPost('class_iddddd'),
                'online_admission_auto_idddiiid'=> $this->request->getPost('online_admission_auto_idddiiid'),
                'section_uniq_iddsss'           => $this->request->getPost('section_uniq_iddsss'),
                'student_picture_pathssss'      => $uploadPath.'/'.$newName,

                // Optional auto-generated fields
                'create_timess'                 => time(),
                'update_timess'                 => null,
                'create_datesss'                => date('Y-m-d'),
                'create_user_idsss'              => session()->get('user_id') ?? 0,
            ];

            if ($this->StudentAddFromAdminPanelModel->insert($dataa)) {
                session()->setFlashdata('success', 'Student Admission Successfully');
            } else {
                session()->setFlashdata('error', 'Something went wrong!');
            }
            return redirect()->to(base_url('student_add_from_admin_panel'));

        } else {
                session()->setFlashdata('error', 'ফাইল আপলোড হয়নি। দয়া করে আবার চেষ্টা করুন।');
        }



    }
}
