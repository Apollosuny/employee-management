<?php 

class AdminController extends Controller {

    public $data = [];

    function dashboard() 
    {
        $this->data['content'] = 'admin/components/dashboard';
        return $this->render('layout/admin-layout', $this->data);
    }

    function users() 
    {
        $this->data['content'] = 'admin/components/users';
        return $this->render('layout/admin-layout', $this->data);
    }
}