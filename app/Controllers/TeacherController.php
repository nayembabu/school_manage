<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeacherModel;

class TeacherController extends BaseController
{
    public function index()
    {
        // ফর্ম দেখানোর জন্য
        return $this->template->admin_panel('/teacher/teacher_add');
    }

    public function save()
    {
        helper(['form']);

        $rules = [
            'full_name'         => 'required|min_length[3]|max_length[100]',
            'email'             => 'required|valid_email',
            'mobile_number'     => 'required|min_length[6]|max_length[20]',
            'gender'            => 'required|in_list[Male,Female,Other]',
            'date_of_birth'     => 'required',
            'photo'             => 'uploaded[photo]|is_image[photo]|max_size[photo,2048]',
        ];

        if (!$this->validate($rules)) {
            // Validation failed
            return $this->template->admin_panel('/teacher/teacher_add', [
                'validation' => $this->validator
            ]);
        }

        // ফাইল আপলোড
        $photoFile = $this->request->getFile('photo');
        $photoName = '';
        if ($photoFile && $photoFile->isValid() && !$photoFile->hasMoved()) {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('uploads/teachers/', $photoName);
        }

        // ডাটা ইনসার্ট
        $data = [
            'full_name'              => $this->request->getPost('full_name'),
            'father_name'            => $this->request->getPost('father_name'),
            'mother_name'            => $this->request->getPost('mother_name'),
            'gender'                 => $this->request->getPost('gender'),
            'date_of_birth'          => $this->request->getPost('date_of_birth'),
            'blood_group'            => $this->request->getPost('blood_group'),
            'email'                  => $this->request->getPost('email'),
            'mobile_number'          => $this->request->getPost('mobile_number'),
            'national_id'            => $this->request->getPost('national_id'),
            'present_address'        => $this->request->getPost('present_address'),
            'permanent_address'      => $this->request->getPost('permanent_address'),
            'photo'                  => $photoName,
            'qualification'          => $this->request->getPost('qualification'),
            'subject_specialization' => $this->request->getPost('subject_specialization'),
            'experience'             => $this->request->getPost('experience'),
            'emergency_contact'      => $this->request->getPost('emergency_contact'),
            'marital_status'         => $this->request->getPost('marital_status'),
            'bank_account_details'   => $this->request->getPost('bank_account_details'),
            'reference_details'      => $this->request->getPost('reference_details'),
            
            'religion'               => $this->request->getPost('religion'),

        ];

        $model = new TeacherModel();
        $model->save($data);

        return redirect()->to('/teacher_add')->with('success', 'Teacher added successfully!');
    }
}
