<?php

class AuthController extends Controller
{

    public $data = [];

    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function signin()
    {
        $this->data['sub_content']['errors'] = Session::flash('errors');
        $this->data['sub_content']['oldData'] = Session::flash('oldData');
        $this->data['sub_content']['logout_success'] = Session::flash('logout_success');
        $this->data['content'] = 'signin/signin';
        return $this->render('layout/app/app-layout', $this->data);
    }

    function handle_sign_in()
    {
        $request = new Request();
        $respone = new Response();
        if ($request->isPost()) {
            $request->rules([
                'username' => 'required|min:6|max:30',
                'password' => 'required|min:6',
            ]);

            $request->message([
                'username.required' => 'Username is required',
                'username.min' => 'Username min is 6',
                'username.max' => 'Username max is 30',
                'password.required' => 'Password is required',
                'password.min' => 'Password min is 6',
            ]);

            $validate = $request->validate();
            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('oldData', $request->getFields());
            } else {
                $user = $this->userModel->getAUser($request->getFields()['username'], $request->getFields()['password']);
                
                echo '<pre>';
                print_r($user);
                echo '</pre>';

                // echo $user;

                if (!empty($user) && count($user) == 1) {
                    /* Issue session */
                    $check = Session::data('user', [
                        'username' => $user[0]['username'],
                        'email' => $user[0]['email'],
                        'role' => $user[0]['role']
                    ]);

                    var_dump($check);

                    if (!empty($user[0]['role'])) {
                        if ($user[0]['role'] == 'employee') {
                            $respone->redirect('dashboard');
                            return;
                        } else if ($user[0]['role'] == 'admin') {
                            $respone->redirect('admin/adminpanel');
                            return;
                        }
                    } else {
                        // Trường hợp vai trò không xác định, có thể xử lý tại đây
                        Session::flash('errors', ['Invalid user role']);
                        $respone->redirect('login');
                        return;
                    }
                } else {
                    Session::flash('errors', ['Invalid username or password']);
                    $respone->redirect('login');
                    return;
                } 
            }
        }
        if (Session::data('user')) {
            $user = Session::data('user');
            if ($user['role'] == 'employee') {
                $respone->redirect('dashboard');
            } else if ($user['role'] == 'admin') {
                $respone->redirect('admin/adminpanel');
            } else {
                $respone->redirect('');
            }
        } else {
            $respone->redirect('');
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

    function logout()
    {
        $request = new Request();

        if ($request->isPost()) {
            if (Session::data('user') != null) {
                $response = new Response();
                Session::flash('logout_success', 'Logout successfully');
                Session::delete();
                $response->redirect('');
                return;
            }
        } 
    }
}
