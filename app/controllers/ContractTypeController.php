<?php

class ContractTypeController extends Controller
{

    public $data = [];

    public $contractTypeModel;

    public function __construct()
    {
        $this->contractTypeModel = $this->model('ContractTypeModel');
    }

    /** Positions func */
    function contractTypes()
    {
        $contractTypes = $this->contractTypeModel->getAllContractTypes();
        $this->data['sub_content']['success'] = Session::flash('success');
        $this->data['sub_content']['deleted_success'] = Session::flash('deleted_success');
        $this->data['sub_content']['contractTypes'] = $contractTypes;
        $this->data['content'] = 'admin/components/contract-type';
        return $this->render('layout/admin-layout', $this->data);
    }

    function createContractType()
    {
        $this->data['sub_content'] = [];
        $this->data['content'] = 'admin/contract-type/create-contract-type';
        return $this->render('layout/admin-layout', $this->data);
    }

    function hanle_create_contract_type()
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
            var_dump($validate);
            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('oldData', $request->getFields());
            } else {
                $newPosition = $this->contractTypeModel->createContractType($request->getFields()['name'], $request->getFields()['description']);

                if ($newPosition) {
                    Session::flash('success', 'Create successfully');
                    $respone->redirect('admin/contract-types');
                    return;
                }
            }
            $respone->redirect('admin/contract-types');
            return;
        }
    }

    function editContractType($id)
    {
        $contractType = $this->contractTypeModel->getAPosition($id);
        if (empty($contractType)) {
            Session::flash('not-found', 'The position is not found');
            $this->data['sub_content'] = [];
            $this->data['content'] = 'admin/contract-types';
            return $this->render('layout/admin-layout', $this->data);
        }
        $this->data['sub_content']['updated_success'] = Session::flash('success');
        $this->data['sub_content']['contractTypes'] = $contractType[0];
        $this->data['content'] = 'admin/contract-types/edit-contract-type';
        return $this->render('layout/admin-layout', $this->data);
    }

    function handle_edit_position($id)
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
                $newPosition = $this->contractTypeModel->updatePosition($id, $request->getFields()['name'], $request->getFields()['description']);

                if ($newPosition) {
                    Session::flash('success', 'Updated successfully');
                    $respone->redirect('admin/positions');
                    return;
                }
            }
            $respone->redirect('admin/positions');
            return;
        }
    }

    function handle_delete_position($id)
    {
        $request = new Request();
        $respone = new Response();
        if ($request->isPost()) {
            $newPosition = $this->contractTypeModel->deletePosition($id);
            if ($newPosition) {
                Session::flash('deleted_success', 'Deleted successfully');
                $respone->redirect('admin/positions');
                return;
            }
        }
        $respone->redirect('admin/positions');
        return;
    }
}
