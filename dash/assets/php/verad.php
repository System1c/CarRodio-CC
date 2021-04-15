<?php

include_once('dblog.php');

class verad extends Dblog
{

    private $v1;
    private $v2;
    private $v3;
    private $v4;
    private $v5;
    private $v6;


    function __construct($title, $vcondition, $type, $brand, $price, $sellid)
    {
        $this->v1 = $title;
        $this->v2 = $vcondition;
        $this->v3 = $type;
        $this->v4 = $brand;
        $this->v5 = $price;
        $this->v6 = $sellid;
    }

    function vsDb()
    {
        $sql = "SELECT * FROM users where id='$this->v6'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function signDb()
    {
        $ssql = "INSERT INTO advert (title, vcondition, type, brand, price, sellid) VALUES ('$this->v1','$this->v2','$this->v3','$this->v4')";
        $this->conn()->query($ssql);
    }


}