<?php
class ContractTypeModel extends Model {
    protected $_table = 'ContractType';

    function tableName()
    {
        return 'ContractType';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function getAllContractTypes() {
        $sql = "SELECT * FROM ".$this->tableName();
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        return null;
    }

    public function getAContractType($id) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE id = $id";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        return null;
    }

    public function createContractType($name, $description = '') {
        $sql = "INSERT INTO `".$this->tableName()."` (`name`, `description`) VALUES('$name', '$description');";
        $data = $this->db->query($sql);
        return $data;
    }

    public function updateContractType($id, $name, $description = '') {
        $param = [
            'name' => $name,
            'description' => $description
        ];
        $data = $this->db->updateData($this->tableName(), $param, "id=$id");
        return $data;
    }

    public function deleteContractType($id) {
        $data = $this->db->deteleData($this->tableName(), "id = $id");
        return $data;
    }
}