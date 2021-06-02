<?php
class queryUserAd extends Dblog {

    public $uid;

    public function __construct($id)
    {
        $this->uid = $id;
    }

    function queryUAd(){
        $sql = "SELECT id, title, status FROM advert WHERE sellerid='$this->uid'";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function queryUmsg(){
        $sql = "SELECT id, buyerem, sellerid, adid, message FROM messages WHERE sellerid='$this->uid'";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }







}