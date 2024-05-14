<?php

class UserController extends Controller {
    public $data = [];

    function index () {
        $this->data['content'] = 'client/dashboard';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function contracts() {
        $this->data['content'] = 'client/contracts';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function profile() {
        $this->data['content'] = 'client/profile';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function attendanceChecking() {
        $this->data['content'] = 'client/attendance-checking';
        return $this->render('layout/app/app-layout', $this->data);
    }
}

?>