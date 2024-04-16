<?php

abstract class Model extends Database {
    protected $db;
    function __construct()
    {
        $this->db = new Database();
    }

    abstract function tableName();

    abstract function fieldSelect();

    public function fetchAll() {
        $tableName = $this->tableName();
        $fieldsSelect = $this->fieldSelect();
        if (empty($fieldsSelect)) {
            $fieldsSelect = '*';
        }
        $sql = "SELECT $fieldsSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)) {
            return $query->fetch_assoc();
        }
        return false;
    }
}