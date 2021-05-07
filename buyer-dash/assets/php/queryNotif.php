<?php
class queryNotif extends Dblog {

    public $uid;

    public function __construct($id)
    {
        $this->uid = $id;
    }

    function queryNAd(){
        $sql = "SELECT id, title, status FROM advert WHERE sellerid='$this->uid' AND ntf=0 ORDER BY postdate DESC";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

}