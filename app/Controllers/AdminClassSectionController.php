<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SectionModel;
use App\Models\ClassModel;

class AdminClassSectionController extends BaseController
{
    protected $sectionModel;
    protected $classModel;
    public function __construct()
    {
        parent::__construct();
        $this->sectionModel = new SectionModel();
        $this->classModel = new ClassModel();
    }
    public function index()
    {
        $data['sections'] = $this->sectionModel
        ->select('section_s.*, class_Name.class_name_s')
        ->join('class_Name', 'class_Name.class_name_auto_id = section_s.class_pr_id_set')
        ->findAll();
        $this->template->admin_panel('section', $data); 
    }
    public function deleteSection()
    {
        $id = $this->request->getPost('id');
        $deleted = $this->sectionModel->delete($id);
        if ($deleted) {
            return $this->response->setJSON(['status' => '200', 'message' => 'Section deleted successfully']);
        } else {
            return $this->response->setJSON(['status' => '400', 'message' => 'Failed to delete section']);
        }
    }
    public function viewClassName(){
        $classNames = $this->classModel->findAll();
        return $this->response->setJSON(['data' => $classNames]);
    }
    public function addSection()
    {
        $className = $this->request->getPost('class_name');
        $sectionName = $this->request->getPost('section_name');

        if (empty($className) || empty($sectionName)) {
            return redirect()->back()->with('error', 'Class name and section name are required');
        }

        $data = [
            'class_pr_id_set' => $className,
            'section_namesss' => $sectionName
        ];

        $inserted = $this->sectionModel->insert($data);
        if ($inserted) {
            return redirect()->back()->with('success', 'Section added successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add section');
        }
    }
    public function updateSection()
    {
        $sectionId = $this->request->getPost('id');
        $sectionName = $this->request->getPost('section_name');

        if (empty($sectionId) || empty($sectionName)) {
            return $this->response->setJSON([
                'status' => '400',
                'message' => 'Section ID and section name are required'
            ]);
        }

        // Find the section by ID
        $section = $this->sectionModel->find($sectionId);
        if (!$section) {
            return $this->response->setJSON([
                'status' => '404',
                'message' => 'Section not found'
            ]);
        }

        // Update only the section name
        $data = [
            'section_namesss' => $sectionName
        ];

        $updated = $this->sectionModel->update($sectionId, $data);
        if ($updated) {
            return $this->response->setJSON([
                'status' => '200',
                'message' => 'Section name updated successfully'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => '400',
                'message' => 'Failed to update section name'
            ]);
        }
    }
}
