<?php

class AdminController extends Controller
{

    public $data = [];

    public $userModel;
    public $positionModel;
    public $attendanceModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
        $this->attendanceModel = $this->model('AttendanceModel');
    }

    function dashboard()
    {
        $attendances = [];
        $data = $this->attendanceModel->findAll();
        $users = $this->userModel->getAllUsers();
        if (!empty($data))
            $attendances = $data;
        $this->data['sub_content']['attendances'] = $attendances;
        $this->data['sub_content']['users'] = $users;
        $this->data['sub_content']['time'] = $this->getTime();
        $this->data['sub_content']['title'] = 'Dashboard';
        $this->data['content'] = 'admin/components/adminpanel';
        return $this->render('layout/admin-layout', $this->data);
    }

    function getTime()
    {
        $currentHour = date("H");

        if ($currentHour >= 5 && $currentHour < 12) {
            return 'morning';
        } elseif ($currentHour >= 12 && $currentHour < 18) {
            return 'afternoon';
        } else {
            return 'night';
        }
    }

    function contracts()
    {
        $this->data['content'] = 'admin/components/contracts';
        return $this->render('layout/admin-layout', $this->data);
    }
}