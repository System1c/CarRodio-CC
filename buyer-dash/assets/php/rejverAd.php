<?php
include_once ('Dblog.php');
class rejverAd extends Dblog
{

    public $id;


    function __construct($id){
        $this->id=$id;
    }

    function delAd2(){
        $del = "DELETE from wlist where id='$this->id'";
        $this->conn()->query($del);
    }



}
