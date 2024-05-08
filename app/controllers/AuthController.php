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

        if ($request->isPost()) {
            $request->rules([
                'username' => 'required|min:6|max:30',
                'password' => 'required|min:6',
            ]);
    
            $request->message([
                'username.required' => 'Username is required',
                'username.min' => 'Username min is 6',
                'username.max' => 'Username max is 30',
                'passowrd.required' => 'Password is required',
                'password.min' => 'Password min is 6',
            ]);
    
            $validate = $request->validate();
            if (!$validate) {
                $this->data['errors'] = $request->errors();
                // Session::flash('old', $request->getFields());
            }

        // $this->db->insertData('User', $request->getFields());

        // $this->data['content'] = 'signin/signin';
        $this->render('signin/signin', $this->data);

        } else {
            $respone = new Response();
        }
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
                'email' => 'required|email|unique:User:email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|match:password'
            ]);
    
            $request->message([
                'username.required' => 'Username is required',
                'username.min' => 'Username min is 6',
                'username.max' => 'Username max is 30',
                'email.required' => 'Email is required',
                'email.email' => 'The string must be email',
                'passowrd.required' => 'Password is required',
                'password.min' => 'Password min is 6',
                'confirm_password.required' => 'Confirm password is required',
                'confirm_password.match' => 'Confirm password is not match with password'
            ]);
    
            $validate = $request->validate();
            if (!$validate) {
                $this->data['errors'] = $request->errors();
                $this->data['old'] = $request->getFields();
            }

            $this->db->insertData('User', $request->getFields());

        } else {
            $respone = new Response();
        }
    }
}

?>