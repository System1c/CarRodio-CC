<?php
class queryuser extends Dblog {

    public $em1l;
    function __constructor($email){
        $this->em1l = $email;
    }

    function getUser($ml){
        $sql = "SELECT firstname, lastname, email FROM users where email = '$ml'";
        $result = $this->conn()->query($sql);
        return $result;
    }
}