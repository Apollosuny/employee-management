<?php
class AttendanceModel extends Model {
    protected $_table = 'AttendanceTracking';

    function tableName()
    {
        return 'AttendanceTracking';
    }

    function fieldSelect()
    {
        return '*';
    }

    public function primaryKey()
    {
        
    }

    public function getAllRecords($userId) {
        $sql = "SELECT * FROM ".$this->tableName()." WHERE userId =".$userId;
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        return null;
    }

    public function create($userId, $baseDate, $clockInAt) {
        $params = [
            'userId' => $userId,
            'baseDate' => $baseDate,
            'clockInAt' => $clockInAt,
            'workType' => 'regular'
        ];
        $data = $this->db->insertData($this->tableName(), $params);
        return $data;
    }

    public function update($id, $userId ,$clockOutAt) {
      $params = [
        'clockOutAt' => $clockOutAt
      ];
      $data = $this->db->updateData($this->tableName(), $params, "id=$id AND userId=$userId");
      return $data;
    }

    // public function deleteContract($id) {
    //     $data = $this->db->deteleData($this->tableName(), "id = $id");
    //     return $data;
    // }
}