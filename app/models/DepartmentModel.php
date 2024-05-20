<?php
class DepartmentModel extends Model {
    protected $_table = 'Department';

    function tableName()
    {
        return 'Department';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function getAllDepartments() {
        $sql = "SELECT * FROM ".$this->tableName();
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        return null;
    }

    public function getADepartment($id) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE id = $id";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        return null;
    }

    public function createDepartment($name, $phone = '', $email = '', $address = '',  $description = '') {
        $sql = "INSERT INTO `".$this->tableName()."` (`name`, `phone`, `email`, `address`, `description`) VALUES('$name', '$phone', '$email', '$address', '$description');";
        $data = $this->db->query($sql);
        return $data;
    }

    public function updateDepartment($id, $name, $phone = '', $email = '', $address = '', $description = '') {
        $param = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'description' => $description
        ];
        $data = $this->db->updateData($this->tableName(), $param, "id=$id");
        return $data;
    }

    public function deleteDepartment($id) {
        $data = $this->db->deteleData($this->tableName(), "id = $id");
        return $data;
    }
}