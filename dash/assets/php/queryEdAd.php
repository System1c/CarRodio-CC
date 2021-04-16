<?php
include_once ('Dblog.php');
class queryEdAd extends Dblog{

    public $adid;


    function __construct($ad)
    {
        $this->adid = $ad;
    }

    function queryEAd(){
        $sql = "SELECT title, vcondition, type, brand, price, oldpr from advert WHERE id='$this->adid'";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}