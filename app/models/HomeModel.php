<?php
class HomeModel extends Model {
    protected $_table = 'products';

    function tableName()
    {
        return 'products';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function getList() {
        // $data = $this->db->query("SELECT * FROM products")->fetch_assoc();
        // return $data;
    }
}