<?php
class ProfileModel extends Model {
    protected $_table = 'Profile';

    function tableName()
    {
        return 'Profile';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function create($departmentId) {
        $params = [
            'departmentId' => $departmentId
        ];
        $data = $this->db->insertDataReturnId($this->tableName(), $params);
        return $data;
    }
}