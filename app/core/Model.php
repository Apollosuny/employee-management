<?php

abstract class Model extends Database {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    abstract function tableName();

    abstract function fieldSelect();

    abstract function primaryKey();

    public function findAll() {
        $tableName = $this->tableName();
        $fieldsSelect = $this->fieldSelect();
        if (empty($fieldsSelect)) {
            $fieldsSelect = '*';
        }
        $sql = "SELECT $fieldsSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)) {
            // return $query->fetch_assoc();
        }
        return false;
    }

    public function findOne($id) {
        $tableName = $this->tableName();
        $fieldsSelect = $this->fieldSelect();
        $primaryKey = $this->primaryKey();

        if (empty($fieldsSelect)) {
            $fieldsSelect = '*';
        }
        $sql = "SELECT $fieldsSelect FROM $tableName WHERE $primaryKey=$id";
        $query = $this->db->query($sql);
        if (!empty($query)) {
            // return $query->fetch_row();
        }
        return false;
    }
}