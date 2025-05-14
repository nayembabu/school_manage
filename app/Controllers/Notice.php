<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\NoticeModel;

class Notice extends BaseController
{
    protected $noticeModel;
    public function __construct(){
        parent::__construct();
        $this->noticeModel = new NoticeModel();
    }


    // Function to display the Notice page    
    public function index(){ 
        $data['allNotice'] = $this->noticeModel->findAll();
        $this->template->front_panel('notice', $data);
    }
    public function show($id){
        $data['notice'] = $this->noticeModel->find($id);
        if(!$data['notice']){
            return redirect()->to('/notice');
        }
        $this->template->front_panel('notice_detail', $data);
}

}

?>