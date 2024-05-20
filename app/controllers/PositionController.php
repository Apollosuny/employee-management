<?php

class PositionController extends Controller
{

    public $data = [];

    public $positionModel;

    public function __construct()
    {
        $this->positionModel = $this->model('PositionsModel');
    }

    /** Positions func */
    function positions()
    {
        $positions = [];
        $data = $this->positionModel->getAllPositions();
        if ($data != null)
            $positions = $data;
        $this->data['sub_content']['success'] = Session::flash('success');
        $this->data['sub_content']['deleted_success'] = Session::flash('deleted_success');
        $this->data['sub_content']['positions'] = $positions;
        $this->data['content'] = 'admin/components/positions';
        return $this->render('layout/admin-layout', $this->data);
    }

    function createPosition()
    {
        $this->data['sub_content'] = [];
        $this->data['content'] = 'admin/positions/create-position';
        return $this->render('layout/admin-layout', $this->data);
    }

    function hanle_create_position()
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
                $newPosition = $this->positionModel->createPosition($request->getFields()['name'], $request->getFields()['description']);

                if ($newPosition) {
                    Session::flash('success', 'Create successfully');
                    $respone->redirect('admin/positions');
                    return;
                }
            }
            $respone->redirect('admin/positions');
            return;
        }
    }

    function editPosition($id)
    {
        $position = $this->positionModel->getAPosition($id);
        if (empty($position)) {
            Session::flash('not-found', 'The position is not found');
            $this->data['sub_content'] = [];
            $this->data['content'] = 'admin/positions';
            return $this->render('layout/admin-layout', $this->data);
        }

        $this->data['sub_content']['updated_success'] = Session::flash('success');
        $this->data['sub_content']['position'] = $position; // Pass the entire $position array, not just the first element
        $this->data['content'] = 'admin/positions/edit-position';
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
                $newPosition = $this->positionModel->updatePosition($id, $request->getFields()['name'], $request->getFields()['description']);

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
            $newPosition = $this->positionModel->deletePosition($id);
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
