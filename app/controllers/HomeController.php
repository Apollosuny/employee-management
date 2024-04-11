<?php

class HomeController extends Controller {
    public $data = [];

    function signin() 
    {
        $this->data['content'] = 'signin/signin';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function signup()
    {
        $this->data['content'] = 'signup/signup';
        return $this->render('layout/app/app-layout', $this->data);
    }
}