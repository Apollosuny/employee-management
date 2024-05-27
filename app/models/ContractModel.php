<?php
class ContractModel extends Model {
    protected $_table = 'Contract';

    function tableName()
    {
        return 'Contract';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function getAllContracts() {
      $sql = "
            SELECT 
                c.id, 
                c.salary, 
                c.description, 
                c.signedDate, 
                c.startDate, 
                c.endDate, 
                c.positionId, 
                c.contractTypeId, 
                c.status, 
                c.createdAt, 
                c.updatedAt,
                p.name AS positionName,
                ct.name AS contractTypeName,
                u.username AS user
            FROM 
                Contract c
            JOIN 
                Position p ON c.positionId = p.id
            JOIN 
                ContractType ct ON c.contractTypeId = ct.id
            JOIN
                User u ON c.userId = u.id
        ";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        return null;
    }

    public function getAContract($id) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE id = $id";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        return null;
    }

    public function createContract(
      $salary, 
      $signed_date, 
      $start_date, 
      $end_date, 
      $position, 
      $contract_type, 
      $employee,
      $description = ''
    ) {
        $params = [
          'salary' => $salary,
          'signedDate' => $signed_date,
          'startDate' => $start_date,
          'endDate' => $end_date,
          'positionId' => $position,
          'contractTypeId' => $contract_type,
          'userId' => $employee,
          'description' => $description
        ];

        $status = $this->db->insertData($this->tableName(), $params);
        if ($status) {
          return true;
        } 
        return false;
    }

    public function updateContract(
      $id, 
      $salary, 
      $signed_date, 
      $start_date, 
      $end_date, 
      $position, 
      $contract_type, 
      $description
    ) {
      $params = [
        'salary' => $salary,
        'signedDate' => $signed_date,
        'startDate' => $start_date,
        'endDate' => $end_date,
        'positionId' => $position,
        'contractTypeId' => $contract_type,
        'description' => $description
      ];

        $data = $this->db->updateData($this->tableName(), $params, "id=$id");
        return $data;
    }

    public function deleteContract($id) {
        $data = $this->db->deteleData($this->tableName(), "id = $id");
        return $data;
    }
}