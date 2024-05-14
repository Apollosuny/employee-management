<?php 

class AdminController extends Controller {

    public $data = [];

    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function dashboard() 
    {
        $this->data['content'] = 'admin/components/adminpanel';
        return $this->render('layout/admin-layout', $this->data);
    }

    function users() 
    {
        $users = $this->userModel->getAllUsers();
        $this->data['sub_content']['users'] = $users;
        $this->data['content'] = 'admin/components/users';
        return $this->render('layout/admin-layout', $this->data);
    }

    function positions() 
    {
        $this->data['content'] = 'admin/components/positions';
        return $this->render('layout/admin-layout', $this->data);
    }

    function contractTypes() 
    {
        $this->data['content'] = 'admin/components/contract-type';
        return $this->render('layout/admin-layout', $this->data);
    }

    function departments() 
    {
        $this->data['content'] = 'admin/components/departments';
        return $this->render('layout/admin-layout', $this->data);
    }

    function contracts() 
    {
        $this->data['content'] = 'admin/components/contracts';
        return $this->render('layout/admin-layout', $this->data);
    }
}