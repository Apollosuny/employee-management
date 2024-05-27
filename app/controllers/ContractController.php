<?php
class ContractController extends Controller
{
  public $data = [];
  public $contractModel;
  public $contractTypeModel;
  public $positionModel;
  public $userModel;

  public function __construct()
  {
    $this->contractModel = $this->model('ContractModel');
    $this->contractTypeModel = $this->model('ContractTypeModel');
    $this->positionModel = $this->model('PositionsModel');
    $this->userModel = $this->model('UserModel');
  }

  public function index()
  {
    $contracts = [];
    $data = $this->contractModel->getAllContracts();
    if ($data != null) {
      $contracts = $data;
    }
    $this->data['sub_content']['success'] = Session::flash('success');
    $this->data['sub_content']['deleted_success'] = Session::flash('deleted_success');
    $this->data['sub_content']['contracts'] = $contracts;
    $this->data['content'] = 'admin/contracts/index';
    return $this->render('layout/admin-layout', $this->data);
  }

  public function create()
  {
    $contractType = $this->contractTypeModel->getAllContractTypes();
    $position = $this->positionModel->getAllPositions();
    $employee = $this->userModel->getAllEmployees();
    $this->data['sub_content']['contractTypes'] = $contractType ? $contractType : [];
    $this->data['sub_content']['positions'] = $position ? $position : [];
    $this->data['sub_content']['employees'] = $employee ? $employee : [];
    $this->data['content'] = 'admin/contracts/create';
    return $this->render('layout/admin-layout', $this->data);
  }

  public function hanle_create_contract()
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
      $request->rules([
        'salary' => 'required',
        'signed_date' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'position' => 'required',
        'contract_type' => 'required',
        'employee' => 'required'
      ]);

      $request->message([
        'salary.required' => 'Salary is required',
        'signed_date.required' => 'Signed date name is required',
        'start_date.required' => 'Start date is required',
        'end_date.required' => 'End date is required',
        'position.required' => 'Position is required',
        'contract_type.required' => 'Contract type is required',
        'employee.required' => 'Employee is required',
      ]);

      $validate = $request->validate();
      if (!$validate) {
        Session::flash('errors', $request->errors());
        Session::flash('oldData', $request->getFields());
      } else {
        $newContract = $this->contractModel->createContract(
          $request->getFields()['salary'], 
          $request->getFields()['signed_date'], 
          $request->getFields()['start_date'], 
          $request->getFields()['end_date'], 
          $request->getFields()['position'], 
          $request->getFields()['contract_type'], 
          $request->getFields()['employee'],
          $request->getFields()['description'],
        );

        if ($newContract) {
          Session::flash('success', 'Create successfully');
          $respone->redirect('admin/contracts');
          return;
        }
      }
      $respone->redirect('admin/contracts');
      return;
    }
  }

  public function edit($id)
  {
    $contract = $this->contractModel->getAContract($id);
    if (empty($contract)) {
      Session::flash('not-found', 'The position is not found');
      $this->data['sub_content'] = [];
      $this->data['content'] = 'admin/contracts';
      return $this->render('layout/admin-layout', $this->data);
    }
    $contractType = $this->contractTypeModel->getAllContractTypes();
    $position = $this->positionModel->getAllPositions();
    $employee = $this->userModel->getAllEmployees();
    $this->data['sub_content']['contractTypes'] = $contractType ? $contractType : [];
    $this->data['sub_content']['positions'] = $position ? $position : [];
    $this->data['sub_content']['employees'] = $employee ? $employee : [];
    $this->data['sub_content']['contract'] = $contract;
    $this->data['sub_content']['updated_success'] = Session::flash('success');
    $this->data['content'] = 'admin/contracts/edit';
    return $this->render('layout/admin-layout', $this->data);
  }

  public function hanle_edit_contract($id)
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
      $request->rules([
        'salary' => 'required',
        'signed_date' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'position' => 'required',
        'contract_type' => 'required',
      ]);

      $request->message([
        'salary.required' => 'Salary is required',
        'signed_date.required' => 'Signed date name is required',
        'start_date.required' => 'Start date is required',
        'end_date.required' => 'End date is required',
        'position.required' => 'Position is required',
        'contract_type.required' => 'Contract type is required',
      ]);

      $validate = $request->validate();
      if (!$validate) {
        Session::flash('errors', $request->errors());
        Session::flash('oldData', $request->getFields());
        $respone->redirect('admin/contracts');
        return;
      } else {
        $contract = $this->contractModel->updateContract(
          $id,
          $request->getFields()['salary'], 
          $request->getFields()['signed_date'], 
          $request->getFields()['start_date'], 
          $request->getFields()['end_date'], 
          $request->getFields()['position'], 
          $request->getFields()['contract_type'], 
          $request->getFields()['description'],
        );
        var_dump($contract);

        if ($contract) {
          Session::flash('success', 'Updated successfully');
          $respone->redirect('admin/contracts');
          return;
        }
      }
      $respone->redirect('admin/contracts');
      return;
    }
  }

  public function handle_delete_contract($id)
  {
    $request = new Request();
    $respone = new Response();
    if ($request->isPost()) {
        $contract = $this->contractModel->deleteContract($id);
        if ($contract) {
            Session::flash('deleted_success', 'Deleted successfully');
            $respone->redirect('admin/contracts');
            return;
        }
    }
    $respone->redirect('admin/contracts');
    return;
  }
}