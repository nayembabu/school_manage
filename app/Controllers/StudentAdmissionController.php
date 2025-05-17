<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentAdmissionModel;
use App\Models\ClassModel;


class StudentAdmissionController extends BaseController
{

        public function __construct(){
            parent::__construct();
            $this->StudentAdmissionModel = new StudentAdmissionModel();
            $this->ClassModel = new ClassModel();
        }


        public function index()
        {
            $dataa['all_class'] = $this->ClassModel->findAll();
            $this->template->front_panel('student_admission', $dataa);
        }
// Student admisson form 
        public function student_admission()
        {
            $dataa = [
                'student_info_bn_names'         => $this->request->getPost('student_info_bn_names'),
                'student_info_names_en'         => $this->request->getPost('student_info_names_en'),
                'birth_date_dob'                => $this->request->getPost('birth_date_dob'),
                'student_info_bn_father_name'   => $this->request->getPost('student_info_bn_father_name'),
                'student_info_mother_en'        => $this->request->getPost('student_info_mother_en'),
                'student_info_bn_mother'        => $this->request->getPost('student_info_bn_mother'),
                'birth_registration_nos'        => $this->request->getPost('birth_registration_nos'),
                'student_info_addresss'         => $this->request->getPost('student_info_addresss'),
                'student_info_gradian_phone1'   => $this->request->getPost('student_info_gradian_phone1'),
                'student_info_gradian_phone2nd' => $this->request->getPost('student_info_gradian_phone2nd'),
                'gardian_name'                  => $this->request->getPost('gardian_name'),
                'gardian_relationss'            => $this->request->getPost('gardian_relationss'),
                'class_iddddd'                  => $this->request->getPost('class_iddddd'),
            ];
            if ($this->StudentAdmissionModel->insert($dataa)) {
                $session = session();
                $session->setFlashdata('success', 'Student Admission Successfully');
                return redirect()->to(base_url('studentadmission'));
            } else {
                return redirect()->to(base_url('studentadmission'));    
            }
    }       public function student_admission_single_view() {
                        $student_admission_id = $this->request->getGet('student_admission_id'); // student_admission_id এটা হলো প্যারামিটার 
                        // $student_admission_id = $this->request->getGet('student_info_sets_at_iddddds');
                        
                        $data['student_info'] = $this->StudentAdmissionModel->find($student_admission_id);

                        $this->template->front_panel('student_admission_single_view', $data);
                    }
        }
