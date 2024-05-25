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
        $this->data['sub_content']['title'] = 'Sign In';
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
                if (!empty($user)) {
                    /* Issue session */
                    Session::data('user', [
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'role' => $user['role']
                    ]);

                    $currentTime = date('Y-m-d H:i:s');

                    $updateLastLogin = $this->userModel->updateLastLogin($user['id'], $currentTime);
                    if (!$updateLastLogin) {
                        Session::flash('errors', ['Something went wrong']);
                        $respone->redirect('');
                        return;
                    }

                    if (!empty($user['role'])) {
                        if ($user['role'] == 'employee') {
                            $respone->redirect('dashboard');
                            return;
                        } else if ($user['role'] == 'admin') {
                            $respone->redirect('admin/adminpanel');
                            return;
                        }
                    } else {
                        Session::flash('errors', ['Invalid user role']);
                        $respone->redirect('');
                        return;
                    }
                } else {
                    Session::flash('errors', ['Invalid username or password']);
                    $respone->redirect('');
                    return;
                } 
            }
        }
    }

    function logout()
    {
        $request = new Request();
        $response = new Response();

        if ($request->isPost()) {
            if (Session::data('user') != null) {
                Session::flash('logout_success', 'Logout successfully');
                Session::delete();
                $response->redirect('');
                return;
            }
            $response->redirect('');
            return;
        } 
    }
}
