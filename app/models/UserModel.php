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

    public function getAllEmployees() {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE role = 'employee'";
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

    public function getUniqueUser($username, $email) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE username='".$username."' OR email='".$email."' LIMIT 1";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }
        return null;
    }

    public function create($username, $email, $password) {
        $params = [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];
        $data = $this->db->insertDataReturnId($this->tableName(), $params);
        return $data;
    }

    public function updateProfile($profileId, $userId) {
        $sql = "UPDATE ".$this->tableName()." SET profileId = ".$profileId." WHERE id = ".$userId;
        $data = $this->db->query($sql);
        return $data;
    }

    public function updateLastLogin($userId, $time) {
        $sql = "UPDATE ".$this->tableName()." SET lastLoginAt = '".$time."' WHERE id = ".$userId;
        $data = $this->db->query($sql);
        return $data;
    }

    public function deleteUser($userId) {
        $sql = "DELETE FROM ".$this->tableName()." WHERE id = ".$userId;
        $data = $this->db->query($sql);
        return $data;
    }
}