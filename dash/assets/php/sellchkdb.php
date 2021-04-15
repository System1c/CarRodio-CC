<?php
include_once ('SellDblog.php');
class sellchkdb extends SellDblog{
    public $first1;
    public $last1;
    public $eml1;
    public $pass1;
    public $id1;

    function __construct($id, $fname, $lname, $email, $pass){
        $this->id1 = $id;
        $this->first1 = $fname;
        $this->last1 = $lname;
        $this->eml1 = $email;
        $this->pass1= $pass;
    }

    function modUser(){
        echo $this->id1;
        $sql = "UPDATE users SET firstname='$this->first1', lastname='$this->last1', email='$this->eml1', passw='$this->pass1' where id='$this->id1'";
        $this->conn()->query($sql);
    }


}