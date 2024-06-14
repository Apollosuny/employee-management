<?php

class UserController extends Controller {
    public $data = [];
    public $profileModel;
    public $contractModel;
    public $attendanceModel;

    public function __construct()
    {
        $this->profileModel = $this->model('ProfileModel');
        $this->contractModel = $this->model('ContractModel');
        $this->attendanceModel = $this->model('AttendanceModel');
    }

    function index () {
        $response = new Response();
        if (!Session::data('user')) {
            $response->redirect('dashboard');
            return;
        }
        $profile = $this->profileModel->getProfile(Session::data('user')['user']['profileId']);
        $contracts = [];
        $data = $this->contractModel->getContractsByEmployee(Session::data('user')['user']['id']);
        if ($data != null) {
            $contracts = $data;
        }
        $attendances = [];
        $userId = Session::data('user')['user']['id'];
        $data = $this->attendanceModel->getAllRecords($userId);
        if (!empty($data)) {
            $attendances = $data;
        }
        $this->data['sub_content']['attendance'] = $attendances[0];
        $this->data['sub_content']['contract'] = $contracts[0];
        $this->data['sub_content']['profile'] = $profile ?? null;
        $this->data['content'] = 'client/dashboard';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function contracts() {
        $this->data['content'] = 'client/contracts';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function profile() {
        $this->data['sub_content'][] = [];
        $this->data['content'] = 'client/profile';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function attendanceChecking() {
        $this->data['content'] = 'client/attendance-checking';
        return $this->render('layout/app/app-layout', $this->data);
    }
}

?>