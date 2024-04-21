<?php
class UserModel extends Model {
    protected $_table = 'user';

    function tableName()
    {
        return 'user';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function getAllUsers() {
        
    }
}