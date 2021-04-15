<?php
include_once ('SellDblog.php');
class sellquery extends SellDblog {

    public $em1l;

    function __construct($email){
        $this->em1l = $email;
    }


    function getSellerDetails(){
        $sql = "SELECT id, firstname, lastname, email FROM users where email = '$this->em1l'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }


}
