<?php 

class AdminController extends Controller {

    public $data = [];

    public $userModel;
    public $positionModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function dashboard() 
    {
        $this->data['content'] = 'admin/components/adminpanel';
        $this->data['sub_content']['title'] = 'Dashboard';
        return $this->render('layout/admin-layout', $this->data);
    }

    function contracts() 
    {
        $this->data['content'] = 'admin/components/contracts';
        return $this->render('layout/admin-layout', $this->data);
    }
}