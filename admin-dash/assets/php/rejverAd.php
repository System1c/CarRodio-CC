<?php
include_once ('Dblog.php');
class rejverAd extends Dblog
{

    public $id;


    function __construct($id){
        $this->id=$id;
    }

    function verAd(){
        $ver = "UPDATE advert SET status = 'v' WHERE id= '$this->id'";
        $this->conn()->query($ver);
    }

    function rejAd(){
        $rej = "UPDATE advert SET status = 'r' WHERE id= '$this->id'";
        $this->conn()->query($rej);
    }

    function delAd(){
        $del = "DELETE from advert where id='$this->id'";
        $this->conn()->query($del);
    }

}
