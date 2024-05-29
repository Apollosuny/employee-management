<?php 
require_once 'FileController.php';
class ProfileController extends Controller {
  public $data = [];

  public $profileModel;

  public function __construct()
  {
    $this->profileModel = $this->model('ProfileModel');
  }

  public function index()
  {
    $response = new Response();
    if (!Session::data('user')) {
      $response->redirect('dashboard');
      return;
    }
    $profile = $this->profileModel->getProfile(Session::data('user')['user']['profileId']);
    $this->data['sub_content']['profile'] = $profile ?? null;
    if ($profile == null) {
      $response->redirect('dashboard');
      return;
    }
    $this->data['sub_content']['error'] = Session::flash('error');
    $this->data['sub_content']['success'] = Session::flash('success');
    $this->data['content'] = 'client/profile';
    return $this->render('layout/app/app-layout', $this->data);
  }

  public function update($id) 
  {
    $request = new Request();
    $response = new Response();
    $profile = $this->profileModel->getProfile($id);
    if ($request->isPost()) {
      var_dump($request->getFields());
      if ($request->getFields()['file'] && strlen($request->getFields()['file']['full_path']) != 0) {
        $fileController = new FileController();
        $file = $fileController->upload($request->getFields()['file']);
        if (!$file) {
          Session::flash('error', $fileController->error);
        }
      }
      $status = $this->profileModel->update(
        $id, 
        $request->getFields()['firstName'],
        $request->getFields()['lastName'],
        $request->getFields()['dob'],
        $request->getFields()['gender'] ?? null,
        $request->getFields()['address'],
        $file ? $file : $profile['avatar'],
      );

      if ($status) {
        Session::flash('success', 'Updated profile successfully');
      }
    }
    $response->redirect('dashboard/profile');
    return;
  }
}