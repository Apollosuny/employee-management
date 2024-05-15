<?php
class PositionsModel extends Model {
    protected $_table = 'Position';

    function tableName()
    {
        return 'Position';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function getAllPositions() {
        $sql = "SELECT * FROM ".$this->tableName();
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAPosition($id) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE id = $id";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function createPosition($name, $description = '') {
        $sql = "INSERT INTO `".$this->tableName()."` (`name`, `description`) VALUES('$name', '$description');";
        $data = $this->db->query($sql);
        return $data;
    }

    public function updatePosition($id, $name, $description = '') {
        $param = [
            'name' => $name,
            'description' => $description
        ];
        $data = $this->db->updateData($this->tableName(), $param, "id=$id");
        return $data;
    }

    public function deletePosition($id) {
        $data = $this->db->deteleData($this->tableName(), "id = $id");
        return $data;
    }
}