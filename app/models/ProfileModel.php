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

    public function getProfile($id) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE id = $id";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        return null;
    }

    public function create($departmentId) {
        $params = [
            'departmentId' => $departmentId
        ];
        $data = $this->db->insertDataReturnId($this->tableName(), $params);
        return $data;
    }

    public function update(
        $id,
        $firstName, 
        $lastName,
        $dob,
        $gender,
        $address,
        $avatar
    ) {
        $params = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'dob' => $dob,
            'gender' => $gender,
            'address' => $address,
            'avatar' => $avatar
        ];
        $status = $this->db->updateData($this->tableName(), $params, "id=$id");
        return $status;
    }
}