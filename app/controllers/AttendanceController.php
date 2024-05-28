<?php
class AttendanceController extends Controller
{
  public $data = [];
  public $attendanceModel;

  public function __construct()
  {
    $this->attendanceModel = $this->model('AttendanceModel');
  }

  public function index()
  {
    $attendances = [];
    $userId = Session::data('user')['user']['id'];
    $data = $this->attendanceModel->getAllRecords($userId);
    if (!empty($data)) {
      $attendances = $data;
    }
    $this->data['sub_content']['attendances'] = $attendances;
    $this->data['content'] = 'client/attendances/index';
    return $this->render('layout/app/app-layout', $this->data);
  }


  public function checkin()
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
      // $user = $this->userModel->getAUser($request->getFields()['username'], $request->getFields()['password']);
      $baseDate = date('Y-m-d');
      $clockInAt = date('Y-m-d H:i:s');
      $userId = Session::data('user')['user']['id'];
      $data = $this->attendanceModel->create($userId, $baseDate, $clockInAt);
      if ($data) {
        $respone->redirect('dashboard/attendanceChecking');
        return;
      } else {
        Session::flash('errors', ['Invalid username or password']);
        $respone->redirect('');
        return;
      }
    }
  }

  public function checkout($id)
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
      $clockOutAt = date('Y-m-d H:i:s');
      $userId = Session::data('user')['user']['id'];
      $data = $this->attendanceModel->update($id, $userId, $clockOutAt);
      if ($data) {
        $respone->redirect('dashboard/attendanceChecking');
        return;
      } else {
        Session::flash('errors', ['Invalid username or password']);
        $respone->redirect('');
        return;
      }
    }
  }
}