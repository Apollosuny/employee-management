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
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function primaryKey()
    {
        
    }

    public function getAUser($username, $password) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE username='".$username."' AND password='".$password."'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}