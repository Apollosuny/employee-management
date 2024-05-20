<?php 

class DepartmentController extends Controller {
    public $data = [];

    public $departmentModel;

    public function __construct()
    {
        $this->departmentModel = $this->model('DepartmentModel');
    }

    /** Positions func */
    function departments()
    {
        $departments = [];
        $data = $this->departmentModel->getAllDepartments();
        if ($data != null)
            $departments = $data;
        $this->data['sub_content']['success'] = Session::flash('success');
        $this->data['sub_content']['deleted_success'] = Session::flash('deleted_success');
        $this->data['sub_content']['departments'] = $departments;
        $this->data['content'] = 'admin/components/departments';
        return $this->render('layout/admin-layout', $this->data);
    }

    function createDepartment()
    {
        $this->data['sub_content'] = [];
        $this->data['content'] = 'admin/department/create-department';
        return $this->render('layout/admin-layout', $this->data);
    }

    function hanle_create_department()
    {
        $request = new Request();
        $respone = new Response();
        if ($request->isPost()) {
            $request->rules([
                'name' => 'required',
            ]);

            $request->message([
                'name.required' => 'Contract type name is required',
            ]);

            $validate = $request->validate();
            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('oldData', $request->getFields());
            } else {
                $newDepartment = $this->departmentModel->createDepartment(
                    $request->getFields()['name'], 
                    $request->getFields()['phone'],
                    $request->getFields()['email'],
                    $request->getFields()['address'],
                    $request->getFields()['description']
                );

                if ($newDepartment) {
                    Session::flash('success', 'Create successfully');
                    $respone->redirect('admin/departments');
                    return;
                }
            }
            $respone->redirect('admin/departments');
            return;
        }
    }

    function editDepartment($id)
    {
        $department = $this->departmentModel->getADepartment($id);
        if (empty($department)) {
            Session::flash('not-found', 'The position is not found');
            $this->data['sub_content'] = [];
            $this->data['content'] = 'admin/components/department';
            return $this->render('layout/admin-layout', $this->data);
        }
        $this->data['sub_content']['updated_success'] = Session::flash('success');
        $this->data['sub_content']['department'] = $department;
        $this->data['content'] = 'admin/department/edit-department';
        return $this->render('layout/admin-layout', $this->data);
    }

    function handle_update_department($id)
    {
        $request = new Request();
        $respone = new Response();
        if ($request->isPost()) {
            $request->rules([
                'name' => 'required',
            ]);

            $request->message([
                'name.required' => 'Position name is required',
            ]);

            $validate = $request->validate();
            var_dump($validate);
            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('oldData', $request->getFields());
            } else {
                $contractType = $this->departmentModel->updateDepartment(
                    $id, 
                    $request->getFields()['name'], 
                    $request->getFields()['phone'], 
                    $request->getFields()['email'], 
                    $request->getFields()['address'], 
                    $request->getFields()['description']
                );

                if ($contractType) {
                    Session::flash('success', 'Updated successfully');
                    $respone->redirect('admin/departments');
                    return;
                }
            }
            $respone->redirect('admin/departments');
            return;
        }
    }

    function handle_delete_department($id)
    {
        $request = new Request();
        $respone = new Response();
        if ($request->isPost()) {
            $contractType = $this->departmentModel->deleteDepartment($id);
            if ($contractType) {
                Session::flash('deleted_success', 'Deleted successfully');
                $respone->redirect('admin/departments');
                return;
            }
        }
        $respone->redirect('admin/departments');
        return;
    }
}