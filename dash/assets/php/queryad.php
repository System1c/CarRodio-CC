<?php

include_once('SellDblog.php');

class queryad extends SellDblog
{

    public $sid;

    function __construct($id)
    {
        $this->sid = $id;
    }


    function getAdDetails()
    {
        $sql = "SELECT  title, vcondition, type, brand, price FROM advert where id = '$this->sid'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}
