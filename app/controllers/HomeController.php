<?php

class HomeController extends Controller {
    public $data = [];

    public $model_home;

    public function __construct()
    {
        $this->model_home = $this->model('HomeModel');
    }

    function signin() 
    {
        $this->data['content'] = 'signin/signin';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function signup()
    {
        $dataa = $this->model_home->getList();
        echo '<pre>';
        print_r($dataa);
        echo '</pre>';
        $this->data['content'] = 'signup/signup';
        return $this->render('layout/app/app-layout', $this->data);
        
    }
}