<?php
include_once ('Dblog.php');

class queryUserDets extends Dblog{

    public $uid;

    function __construct($usid)
    {
        $this->uid = $usid;
    }

    function queryUserAd(){
        $sql = "SELECT firstname, lastname, email FROM users where id='$this->uid'";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            $udata[] = $row;
        }
        return $udata;
    }
}