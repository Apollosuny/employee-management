<?php
class UserModel extends Model {
    protected $_table = 'User';

    function tableName()
    {
        return 'User';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM ".$this->tableName();
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        return null;
    }

    public function primaryKey()
    {
        
    }

    public function getAUser($username, $password) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE username='".$username."' AND password='".$password."'";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        
        return null;
    }
}