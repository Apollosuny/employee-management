<?php

class UserController extends Controller {
    public $data = [];

    function index () {
        $this->data['content'] = 'user/dashboard';
        return $this->render('layout/app/app-layout', $this->data);
    }
}

?>