<?php

class EmployeeController extends Controller
{
  public $data = [];

  public $userModel;
  public $departmentModel;
  public $profileModel;

  public function __construct()
  {
    $this->userModel = $this->model('UserModel');
    $this->departmentModel = $this->model('DepartmentModel');
    $this->profileModel = $this->model('ProfileModel');
  }

  function index()
  {
    $users = $this->userModel->getAllUsers();
    $this->data['sub_content']['users'] = $users;
    $this->data['sub_content']['success'] = Session::flash('success');
    $this->data['content'] = 'admin/users/index';
    return $this->render('layout/admin-layout', $this->data);
  }

  function register()
  {
    $departments = [];
    $data = $this->departmentModel->getAllDepartments();

    if ($data != null)
      $departments = $data;
    $this->data['sub_content']['departments'] = $departments;
    $this->data['content'] = 'admin/users/create';
    return $this->render('layout/admin-layout', $this->data);
  }

  function handle_register_user()
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
      $request->rules([
        'username' => 'required|min:6|max:30',
        'email' => 'required',
        'password' => 'required|min:6',
        'department' => 'required'
      ]);

      $request->message([
        'username.required' => 'Username is required',
        'username.min' => 'Username min is 6',
        'username.max' => 'Username max is 30',
        'email.required' => 'Email is required',
        'password.required' => 'Password is required',
        'password.min' => 'Password min is 6',
        'department.required' => 'Department is required'
      ]);

      $validate = $request->validate();
      if (!$validate) {
        Session::flash('errors', $request->errors());
        Session::flash('oldData', $request->getFields());
        $respone->redirect('admin/users/register');
        return;
      } else {
        $newUser = $this->userModel->create(
          $request->getFields()['username'],
          $request->getFields()['email'],
          $request->getFields()['password'],
        );

        if ($newUser) {
          $departmentId = $request->getFields()['department'];
          $newProfile = $this->profileModel->create($departmentId);
          if (!$newProfile) return;
          $updateUser = $this->userModel->updateProfile($newProfile, $newUser);
          if (!$updateUser) return;
          Session::flash('success', 'Created successfully');
          $respone->redirect('admin/users');
          return;
        } else {
          Session::flash('errors', ['Cannot create register new user']);
          $respone->redirect('admin/users');
          return;
        }
      }
    }
  }
}