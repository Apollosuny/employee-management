<?php

class HomeController extends Controller {
    public $data = [];

    function index() 
    {
        $this->data['content'] = 'signin/signin';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function detail()
    {
        
    }
}