<?php

class AuthController extends Controller {

    public $data = [];

    public $model_auth;

    public function __construct()
    {
        // $this->model_home = $this->model('HomeModel');
    }

    function signin() 
    {
        $this->data['content'] = 'signin/signin';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function handle_sign_in() 
    {
        $request = new Request();
        $data = $request->getFields();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    function signup()
    {
        $this->data['content'] = 'signup/signup';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function handle_sign_up() 
    {
        $request = new Request();
        
        if ($request->isPost()) {
            $request->rules([
                'username' => 'required|min:6|max:30',
                'email' => 'required|email|unique:user:email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|match:password'
            ]);
    
            $request->message([
                'username.required' => '',
                'username.min' => '',
                'username.max' => '',
                'email.required' => '',
                'email.email' => '',
                'passowrd.required' => '',
                'password.min' => '',
                'confirm_password.required' => '',
                'confirm_password.match' => ''
            ]);
    
            $validate = $request->validate();
            if (!$validate) {
                $this->data['errors'] = $request->errors();
                $this->data['old'] = $request->getFields();
            }
        } else {
            $respone = new Response();
        }
    }
}

?>