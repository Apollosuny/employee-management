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
        
    }

    public function primaryKey()
    {
        
    }
}